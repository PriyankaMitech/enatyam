<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table1 = 'register';
    protected $table2 = 'student';
    protected $table3 = 'faculty';
    protected $tableStudents = 'student_slots_tbl';
    protected $tableTeachers = 'schedule';
    protected $table = 'free_demo_table';
    protected $primaryKey = 'D_id';
    protected $allowedFields = ['Date', 'Conducted_Demo', 'name', 'course', 'AssignTecher_id', 'Session_Start_Date'];

    public function AddUserByAdmin($data)
    {
        //   print_r($email);die;
        $this->db->table('register')->insert($data);
    }
    public function AddStudentByAdmin($insertData)
    {

        $this->db->table('register')->insert($insertData);
    }
    public function getTodayRecords()
    {
        // $today = date('Y-m-d');
        // return $this->where('DATE(Date)', $today)->findAll();
        $today = date('Y-m-d');
        return $this->where('DATE(`Booking_Date_Time`) =', $today)->findAll();
    }
    public function getGroupSessionStudents()
    {
        return $this->db->table('register')->where('SessionType', 'GroupSession')->get()->getResult();
    }
    public function getOneToOneSessionStudents()
    {
        return $this->db->table('register')->where('SessionType', 'OneToOneSession')->get()->getResult();
    }
    public function getConductedDemo()
    {

        return $this->db->table('free_demo_table')->where('Conducted_Demo', 'Y')->get()->getResult();
    }
    public function getStudents()
    {
        // Assuming "user_type" is a field indicating students

        return $this->db->table('register')->where('role', 'Student')->get()->getResult();
    }

    public function getFacultyrole()
    {

        return $this->db->table('register')->where('role', 'Faculty')->get()->getResult();
    }
    public function getTeachersByStudent($studentId)
    {
        // print_r($studentId);die;
        $assignTeacherId = $this->db->table('register')
            ->select('Assign_Techer_id')
            ->where('id', $studentId)
            ->get()
            ->getRow()
            ->Assign_Techer_id;
        return $this->db->table('register')
            ->select('id as Assign_Techer_id, full_name')
            ->where('id', $assignTeacherId)
            ->get()
            ->getResult();
    }
    public function getStudentAndTeacherData($studentId, $teacherId)
    {

        $studentData = $this->db->table('student_slots_tbl')->where('register_student_id', $studentId)->get()->getResultArray();
        $teacherData = $this->db->table('schedule')->where('faculty_register_id', $teacherId)->get()->getResultArray();

        $data = [
            'studentData' => $studentData,
            'teacherData' => $teacherData,
        ];

        return $data;
    }

    // public function getPaymentStatusForEmail($email)
    // {
    //     return $this->db->table('register')
    //         ->select('payment_status')
    //         ->where('email', $email)
    //         ->get()
    //         ->getRow('payment_status');
    // }
    public function getStudentDataByEmail($email)
    {
        return $this->db->table('free_demo_table')
            ->where('email', $email)
            ->get()
            ->getRow();
    }

    // public function getPaymentStatusForEmail($email)
    // {
    //     return $this->db->table('register')
    //         ->select('payment_status')
    //         ->where('email', $email)
    //         ->get()
    //         ->getRow('payment_status');
    // }
    public function getPendingDemo()
    {
        return $this->db->table('free_demo_table')->where('Conducted_Demo', 'N')->get()->getResult();
    }
    public function UnattendedDemoList()
    {
        $today = date('Y-m-d');
        return $this->db->table('free_demo_table')
            ->where('Booking_Date_Time <', $today)
            ->get()
            ->getResult();
    }
    public function getPendingDemoList()
    {
        return $this->db->table('free_demo_table')
            ->where('Conducted_Demo', 'N')
            ->where('Reshedule_date', null)
            ->get()
            ->getResult();
    }
    public function getFacultyShedule()
    {
        $currentMonth = date('m'); // Get the current month in the format 'mm'

        $result = $this->db->table('schedule')
            ->select('schedule.*, register.full_name') // Select the required columns, including faculty_name
            ->join('register', 'register.id = schedule.faculty_register_id') // Join the faculties table
            ->where("MONTH(date) = $currentMonth") // Replace 'date_column' with the actual column name containing the date
            ->get()
            ->getResult();
        //     echo "<pre>";
        // print_r($result);
        // exit();

        return $result;
    }

    public function getRowCount()
    {

        return $this->countAllResults();
    }
    public function getEmployees()
    {
        return $this->findAll();
    }
    public function getAdmins()
    {
        // return $this->db->table('register')->where('role', 'Student')->get()->getResult();
        $query = $this->db->table('register AS students')
            ->select('students.*, IFNULL(teachers.full_name, "Not Assigned") as teacher_name')
            ->join('register AS teachers', 'teachers.id = students.Assign_Techer_id', 'left')
            ->where('students.role', 'Student')
            ->get();

        return $query->getResult();
    }
    public function getFaculty()
    {
        return $this->db->table('register')->where('role', 'Faculty')->get()->getResult();
    }
    public function getAllSessionData()
    {
        return $this->findAll();
    }
    public function edit($data)
    {

        //  echo $data['faculty_name'];die;
        $result = $this->table('free_demo_table')
            ->where(["D_id" => $data['studentid']])
            ->set('AssignTecher_id', $data['faculty_name'])
            ->update();
        if ($result == '1') {
            return true;
        } else {
            return false;
        }
    }


    public function add($data)
    {
        //   print_r($data['studentid']);die;
        $builder1 = $this->db->table($this->table2);
        $builder1->set('Assign_Techer_id', $data['faculty_name']);
        $builder1->set('Session_Start_Date', $data['Session_Start_Date']);
        $builder1->where('register_id', $data['studentid']);
        $result1 = $builder1->update();

        // Update Assign_Techer_id and Session_Start_Date in table1
        $builder2 = $this->db->table($this->table1);
        $builder2->set('Assign_Techer_id', $data['faculty_name']);
        $builder2->set('Session_Start_Date', $data['Session_Start_Date']);
        $builder2->where('id', $data['studentid']);
        $result2 = $builder2->update();


        if ($result1 && $result2) {
            return true;
        } else {
            return false;
        }
    }



    public function getConductedDemoStatus()
    {
        return $this->db->table('free_demo_table')->where('AssignTecher_id >', 0)->get()->getResult();
    }


    public function Paymentstatus()
    {
        return $this->db->table('register')->where('Payment_status', 'Y')->get()->getResult();
    }

    public function getAllDemoData()
    {
        return $this->db->table('free_demo_table')
            ->select('*')
            ->get()
            ->getResult();
    }

    public function getFacultyData()
    {
        $query = $this->db->table('faculty')
            ->select('*')
            ->orderBy('faculty_id', 'desc')
            ->get()
            ->getResult();

        return $query;
    }


    public function getStudentData()
    {
        return $this->db->table('student')
            ->select('*')
            ->get()
            ->getResult();
    }

    public function getStudyVideoUplodedByStudent()
    {

        $VideoDetails = $this->db->table('uplode_study_video_from_student')
            ->select('uplode_study_video_from_student.*, register.full_name as faculty_name')
            ->join('register', 'register.id = uplode_study_video_from_student.Faculty_id')
            ->get()
            ->getResult();
        return  $VideoDetails;
    }

    public function getStudyVideoUplodedByFaculty()
    {
        $VideoDetails = $this->db->table('uplode_video_to_student')
            ->select('uplode_video_to_student.*, student.student_name as student_name, register.full_name as faculty_name')
            ->join('student', 'student.student_id = uplode_video_to_student.student_id')
            ->join('register', 'register.id = uplode_video_to_student.register_faculty_id')
            ->get()
            ->getResult();
        return  $VideoDetails;
    }

    // public function getStudyVideoUplodedByStudent($startDate = null, $endDate = null, $facultyName = null)
    // {
    //     $query = $this->db->table('uplode_study_video_from_student')
    //         ->select('uplode_study_video_from_student.*, register.full_name as faculty_name')
    //         ->join('register', 'register.id = uplode_study_video_from_student.Faculty_id');

    //     // Apply filters if provided

    //     // Apply filters if provided
    //     if ($startDate !== null) {
    //         $startDate = new \DateTime($startDate);
    //         $startDateFormatted = $startDate->format('Y-m-d H:i:s');
    //         $query->where('uplode_study_video_from_student.DateTime >=', $startDateFormatted);
    //     }

    //     if ($endDate !== null) {
    //         $endDate = new \DateTime($endDate);
    //         $endDateFormatted = $endDate->format('Y-m-d H:i:s');
    //         $query->where('uplode_study_video_from_student.DateTime <=', $endDateFormatted);
    //     }

    //     if ($facultyName !== null) {
    //         $query->like('register.full_name', $facultyName);
    //     }

    //     $videoDetails = $query->get()->getResult();

    //     return $videoDetails;
    // }

    // public function getFacultyBySearch($startDate = null, $endDate = null, $facultyName = null)
    // {
    //     // echo $startDate;
    //     // echo $endDate;
    //     // exit();
    //     $query = $this->db->table('uplode_video_to_student')
    //         ->select('uplode_video_to_student.*, student.student_name as student_name, register.full_name as faculty_name')
    //         ->join('student', 'student.student_id = uplode_video_to_student.student_id')
    //         ->join('register', 'register.id = uplode_video_to_student.register_faculty_id');

    //     // Apply filters if provided
    //     if ($startDate !== null) {
    //         $startDate = new \DateTime($startDate);
    //         $startDateFormatted = $startDate->format('Y-m-d H:i:s');
    //         print_r($startDateFormatted);
    //         $query->where('uplode_video_to_student.DateTime >=', $startDateFormatted);
    //     }

    //     if ($endDate !== null) {
    //         $endDate = new \DateTime($endDate);
    //         $endDateFormatted = $endDate->format('Y-m-d H:i:s');
    //         print_r($endDateFormatted);
    //         $query->where('uplode_video_to_student.DateTime <=', $endDateFormatted);
    //     }



    //     if ($facultyName !== null) {
    //         $query->like('register.full_name', $facultyName);
    //     }

    //     $videoDetails = $query->get()->getResult();
    //     // echo '<pre>';
    //     // print_r($videoDetails);
    //     // die;
    //     echo $this->db->getLastQuery();
    //     die;
    //     return $videoDetails;
    // }

    public function getFacultyBySearch($startDate = null, $endDate = null, $facultyName = null)
    {
        $query = $this->db->table('uplode_video_to_student')
            ->select('uplode_video_to_student.*, student.student_name as student_name, register.full_name as faculty_name')
            ->join('student', 'student.student_id = uplode_video_to_student.student_id')
            ->join('register', 'register.id = uplode_video_to_student.register_faculty_id');

        // Apply filters if provided
        if ($startDate !== null) {
            $startDate = new \DateTime($startDate);
            $startDateFormatted = $startDate->format('Y-m-d');
            $query->where("DATE(uplode_video_to_student.DateTime) >=", $startDateFormatted);
        }

        if ($endDate !== null) {
            $endDate = new \DateTime($endDate);
            $endDateFormatted = $endDate->format('Y-m-d');
            $query->where("DATE(uplode_video_to_student.DateTime) <=", $endDateFormatted);
        }

        if ($facultyName !== null) {
            $query->like('register.full_name', $facultyName);
        }

        $videoDetails = $query->get()->getResult();
        // echo '<pre>';
        // print_r($videoDetails);
        // die;

        // Uncomment the following lines for debugging purposes
        // echo $this->db->getLastQuery();
        // die;

        return $videoDetails;
    }

    public function getcarreerBookByfaculty()
    {
        return $this->db->table('carrier')
            ->select('*')
            ->where('Result_of_application', 'Pending')
            ->orderBy("D_id desc")
            ->get()
            ->getResult();
    }

    public function getrejectedList()
    {
        return $this->db->table('carrier')
            ->select('*')
            ->where('Status', 'N')
            ->Where('Result_of_application', 'decline')
            ->get()
            ->getResult();
    }
    public function updateGroupName($rowIdsArray, $groupName)
    {
        return $this->db->table('register')
            ->whereIn('id', $rowIdsArray)
            ->set(['groupName' => $groupName])
            ->update();
    }

    public function updateCarrierData($D_id, $action)
    {
        return $this->db->table('carrier')
            ->where('D_id', $D_id)
            ->update(['Result_of_application' => $action]);
    }

    public function getNullPasswordRecords()
    {
        return $this->db->table('register')
            ->where('password', '')
            ->orderBy("id desc")
            ->get()
            ->getResult();
    }

    public function updatePassword($id, $password)
    {
        return $this->db->table('register')
            ->where('id', $id)
            ->update(['password' => $password, 'confirm_pass' => $password]);
    }
    public function BackToprndinglistofdemo($D_id, $result, $date, $time)
    {
        return $this->db->table('free_demo_table')
            ->where('D_id', $D_id)
            ->update([
                'Conducted_Demo' => $result,
                'Reshedule_date' => $date,
                'Reshedule_Time' => $time
            ]);
    }
    public function getresheduleDemo()
    {

        return $this->db->table('free_demo_table')->where('Conducted_Demo', 'Reschedule')->get()->getResult();
    }
    public function getdate($date)
    {
        $result = $this->db->table('schedule')
            ->where('date', $date)
            ->get()
            ->getResult();
        // echo "<pre>";print_r($result);exit();

        return $result;
    }
    public function getmonthdata()
    {
        $currentMonth = date('Y-m');

        $result = $this->db->table('schedule')
            ->select('*')
            ->where('date >=', $currentMonth . '-01')
            ->where('date <=', $currentMonth . '-31')
            ->get()
            ->getResult();

        return $result;
    }

    public function getAllGroupNames()
    {

        return $this->db->table('register')->distinct()
            ->select('groupName')
            ->where('groupName IS NOT NULL', null, false) // Adding the condition for 'groupName' is not null
            ->get()
            ->getResultArray();
    }
    public function getRecordsByGroupName($groupName)
    {
        return $this->db->table('register')
            ->where('groupName', $groupName)
            ->where('SessionType', 'GroupSession')
            ->get()
            ->getResult();
    }

    public function updateFacultyForGroup($groupName, $facultyId)
    {
        return $this->db->table('register')
            ->where('groupName', $groupName)
            ->set(['Assign_Techer_id' => $facultyId])
            ->update();
    }
    public function getAdminUsers()
    {
        $db = \Config\Database::connect();
        $query = $db->table('register')
            ->select('full_name, email, password, mobile_no')
            ->where('role', 'Admin')->get();
        // echo '<pre>';
        // print_r($query->getResultArray());
        // die;
        // Return the result as an array
        return $query->getResultArray();
    }


    public function insert_formdata($id, $table, $insertdata)
    {
        $result['insert'] = $this->db->table($table)->insert($insertdata);
        if ($result['insert']) {
            $insertedID = $this->db->insertID();
            $result['getdata'] = $this->db->table($table)->where($id, $insertedID)->get()->getRowArray();

            return $result;
        } else {
            return false;
        }
    }

    public function getsinglerow($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getRow();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function getalldata($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getResult();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    public function get_single_data($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getRow();
        // echo "<pre>";print_r( $result );exit();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function getdata($table, $wherecond)
    {

        $result = $this->db->table($table)->where($wherecond)->get()->getResult();

        $sender = $_SESSION['id'];
        if ($result) {
            if (isset($result[0]->msg_id)) {
                foreach ($result as $singlechat) {
                    $receiver = $singlechat->receiver_id;
                    $chat = $this->db->query("SELECT * FROM online_chat WHERE (sender_id = " . $sender . " AND receiver_id = " . $receiver . ") OR (sender_id = " . $receiver . " AND receiver_id = " . $sender . ") ORDER BY msg_id ")->getResultArray();
                }
                return $chat;
            } else {
                foreach ($result as $student) {
                    $receiver = $student->id;
                    $chat[] = $this->getchat('online_chat', $sender, $receiver);
                    $studdata[] = $student->full_name;
                    $studid[] = $student->id;
                }

                $output = array(
                    'chat' => $chat,
                    'studdata' => $studdata,
                    'studid' => $studid
                );
                return $output;
            }
        } else {
            return false;
        }
    }


    public function getchat($tablechat, $sender, $receiver)
    {
        $chat = $this->db->query("SELECT * FROM " . $tablechat . " WHERE (sender_id = " . $sender . " AND receiver_id = " . $receiver . ") OR (sender_id = " . $receiver . " AND receiver_id = " . $sender . ") ORDER BY msg_id");

        $user = $this->db->query("SELECT id, full_name, role FROM register WHERE id = " . $receiver . " ");
        // echo '<pre>';print_r($this->getLastQuery());die;
        //$result = $this->db->table($table)->where($wherecond2.' OR ' .$wherecond3)->get()->getResult();

        if ($chat) {
            return $chat->getResultArray();
        } else {
            return false;
        }
    }
    public function insertNotification($result)
    {
        $selectedFacultyIds = $result['selected_faculty'];
        $selectedStudentIds = $result['selected_students'];
        $notificationDescription = $result['notification_description'];
        $notification_date = $result['notification_date'];
        $admin_id = $result['admin_id'];
        $facultyData = [];
        $studentData = [];
        if (is_array($selectedFacultyIds) && in_array('all', $selectedFacultyIds)) {
            $facultyData[] = [
                'register_id' => 'All',
                'notification_description' => $notificationDescription,
                'user_type' => 'faculty',
                'timestamp' => $notification_date,
                'admin_id' => $admin_id,
                'created_on' => date('Y:m:d H:i:s'),
            ];
        } elseif (is_array($selectedFacultyIds)) {
            foreach ($selectedFacultyIds as $facultyId) {

                $facultyData[] = [
                    'register_id' => 'All',
                    'notification_description' => $notificationDescription,
                    'user_type' => 'faculty',
                    'timestamp' => $notification_date,
                    'admin_id' => $admin_id,
                    'created_on' => date('Y:m:d H:i:s'),
                ];
            }
        } elseif (is_array($selectedFacultyIds)) {
            foreach ($selectedFacultyIds as $facultyId) {
                $facultyData[] = [
                    'register_id' => $facultyId,
                    'notification_description' => $notificationDescription,
                    'user_type' => 'faculty',
                    'timestamp' => $notification_date,
                ];
            }
        }

        if (is_array($selectedStudentIds) && in_array('all', $selectedStudentIds)) {
            $studentData[] = [
                'register_id' => 'All',
                'notification_description' => $notificationDescription,
                'user_type' => 'student',
                'timestamp' => $notification_date,
                'admin_id' => $admin_id,
                'created_on' => date('Y:m:d H:i:s'),
            ];
        } elseif (is_array($selectedStudentIds)) {
            foreach ($selectedStudentIds as $studentId) {

                $studentData[] = [
                    'register_id' => 'All',
                    'notification_description' => $notificationDescription,
                    'user_type' => 'student',
                    'timestamp' => $notification_date,
                    'admin_id' => $admin_id,
                    'created_on' => date('Y:m:d H:i:s'),
                ];
            }
        } elseif (is_array($selectedStudentIds)) {
            foreach ($selectedStudentIds as $studentId) {
                $studentData[] = [
                    'register_id' => $studentId,
                    'notification_description' => $notificationDescription,
                    'user_type' => 'student',
                    'timestamp' => $notification_date,
                ];
            }
        }
        if (!empty($facultyData)) {
            $this->db->table('notificationtable')->insertBatch($facultyData);
        }
        if (!empty($studentData)) {
            $this->db->table('notificationtable')->insertBatch($studentData);
        }
    }

    public function getUserRole($teacherId)
    {
        $result = $this->db->table('notificationtable')
            ->select('notificationtable.*, register.full_name')
            ->join('register', 'register.id = notificationtable.admin_id', 'left')
            ->where('notificationtable.user_type', 'faculty')
            ->where('(notificationtable.register_id = "All" OR notificationtable.register_id = ' . $teacherId . ')')
            ->where('DATE(notificationtable.timestamp) >= CURDATE()')
            ->get()
            ->getResultArray();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    public function getUser($user_id)
    {

        $todayDate = date('Y-m-d H:i:s');

        $result = $this->db->table('notificationtable')
            ->where([
                'user_type' => 'student',
                'register_id' => 'All',
            ])
            ->orWhere('register_id', $user_id)
            ->where('timestamp >=', $todayDate)
            ->get()
            ->getResultArray();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    // public function rate_count($column, $faculty_id)
    // {
    //     $query = $this->db->table('feedback')->select('AVG(rating) as avg_rating')->where($column, $faculty_id)->get()->getRow();
    //     return $query->avg_rating;
    // }

    public function rate_count($faculty_id)
    {
        // Sum of ratings for the faculty
        $totalRatings = $this->db->table('feedback')
            ->selectSum('rating', 'total_ratings')
            ->where('faculty_id', $faculty_id)
            ->get()
            ->getRowArray();

        // Total number of feedbacks for the faculty
        $feedbackCount = $this->db->table('feedback')
            ->where('faculty_id', $faculty_id)
            ->countAllResults();

        // Calculate the average rating
        $averageRating = $feedbackCount > 0 ? $totalRatings['total_ratings'] / $feedbackCount : 0;

        return [
            'total_ratings' => $totalRatings['total_ratings'],
            'feedback_count' => $feedbackCount,
            'average_rating' => $averageRating,
        ];
    }

    public function get_all_dataf($id)
    {
        $result = $this->db->table('carrier')
            ->Where('D_id', $id)
            ->get()
            ->getRow();
        return $result;
    }
}
