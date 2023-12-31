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
    public function findname($AssignTecher_id)
    {
        return $this->db->table('register')->where('id', $AssignTecher_id)->get()->getResult();
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
        return $this->where('DATE(`Book_Date`) =', $today)->findAll();
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
        $today = date('Y-m-d');
        return $this->db->table('free_demo_table')
            ->where('Conducted_Demo', 'N')
            ->where('Book_Date >=', $today)
            ->get()
            ->getResult();
    }
    public function UnattendedDemoList()
    {
        $today = date('Y-m-d');
        return $this->db->table('free_demo_table')
            ->where('Book_Date <', $today)
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

        $result = $this->db->table('schedule')
            ->select('schedule.*, register.full_name') // Select the required columns, including faculty_name
            ->join('register', 'register.id = schedule.faculty_register_id') // Join the faculties table
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

    public function get_students()
    {
        $query = $this->db->table('register AS students')
            ->select('students.*, IFNULL(teachers.full_name, "Not Assigned") as teacher_name, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name')
            ->join('register AS teachers', 'teachers.id = students.Assign_Techer_id', 'left')
            ->join('tbl_courses', 'tbl_courses.id = students.course', 'left')
            ->join('tbl_sub_courses', 'tbl_sub_courses.id = students.sub_course', 'left')
            ->where('students.role', 'Student')
            ->where('students.is_register_done', 'Y')
            ->where('students.Payment_status', 'Y')
            ->orderBy('students.created_at', 'desc')
            ->get();

        return $query->getResult();
    }

    public function getFaculty()
    {
        return $this->db->table('register')->where('role', 'Faculty')->get()->getResult();
    }

    public function getFacultyWithCarrier()
    {

        $result = $this->db->table('register AS r')
            ->select('r.*, carrier.course as ccourses,  carrier.sub_course as csubcourses')
            ->join('carrier', 'r.carrier_id = carrier.D_id ', 'left')
            ->where('r.role', 'Faculty')
            ->get();
        return $result->getResult();
    }



    public function getAllSessionData()
    {
        return $this->findAll();
    }
    public function edit($data)
    {
     //   print_r($data);die;
        $result = $this->table('free_demo_table')
            ->where(["D_id" => $data['studentid']])
            ->set('AssignTecher_id', $data['faculty_id'])
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
        // return $this->db->table('free_demo_table')
        //     ->select('*')
        //     ->get()
        //     ->getResult();
        $result = $this->db->table('free_demo_table AS fdt')
            ->select('fdt.*, register.full_name as full_name')
            ->join('register', 'fdt.AssignTecher_id = register.id')
            ->get()
            ->getResult();
        return $result;

        // echo $this->db->getLastQuery();
        // echo '<pre>';
        // print_r($result);
        // exit();
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


    // public function getStudentData()
    // {
    //     return $this->db->table('student')
    //         ->select('*')
    //         ->get()
    //         ->getResult();
    // }


    public function getStudentData()
    {
        return $this->db->table('student')
            ->select('student.*, register.Payment_status')
            ->join('register', 'register.id = student.register_id', 'left')
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

    public function getSearchData($table, $startDate = null, $endDate = null, $studentName = '', $facultyName = '')
    {
        if ($table == 'uplode_video_to_student') {
            $joinstudent = 'student.student_id = uplode_video_to_student.student_id';
            $joinregister = 'register.id = uplode_video_to_student.register_faculty_id';
            $jointbl1 = 'student';
            $student = 'student.student_name as Student_name';
            $where1 = array('register.id' => $facultyName);
            $where2 = array('uplode_video_to_student.student_id' => $studentName);
        } else {
            $joinstudent = 'register.carrier_id = faculty.carrier_id';
            $joinregister = 'register.id = uplode_study_video_from_student.Faculty_id';
            $jointbl1 = 'faculty';
            $student = '';
            $where1 = array('uplode_study_video_from_student.faculty_id' => $facultyName);
            $where2 = array('uplode_study_video_from_student.register_id' => $studentName);
        }
        $query = $this->db->table($table)
            ->select('' . $table . '.*, ' . $student . ', register.full_name as faculty_name')
            ->join('register', $joinregister)
            ->join($jointbl1, $joinstudent);

        if ($startDate !== null) {
            $startDate = new \DateTime($startDate);
            $startDateFormatted = $startDate->format('Y-m-d H:i:s');
            $query->where('' . $table . '.DateTime >=', $startDateFormatted);
        }

        if ($endDate !== null) {
            $endDate = new \DateTime($endDate);
            $endDateFormatted = $endDate->format('Y-m-d H:i:s');
            $query->where('' . $table . '.DateTime <=', $endDateFormatted);
        }

        if ($facultyName !== '') {
            $query->Where($where1);
        }
        if ($studentName !== '') {
            $query->Where($where2);
        }
        $videoDetails = $query->get()->getResult();
        if ($videoDetails) {
            return $videoDetails;
        } else {
            return 'false';
        }
    }


    public function getcarreerBookByfaculty()
    {
        return $this->db->table('carrier')
            ->select('carrier.*, tbl_sub_courses.sub_courses_name, tbl_courses.courses_name')
            ->join('tbl_sub_courses', 'tbl_sub_courses.id = carrier.sub_course', 'left')
            ->join('tbl_courses', 'tbl_courses.id = carrier.course', 'left')
            ->where('Result_of_application', 'Pending')
            ->orderBy("D_id desc")
            ->get()
            ->getResult();
    }

    public function getrejectedList()
    {
        return $this->db->table('carrier')
            ->select('carrier.*, tbl_sub_courses.sub_courses_name, tbl_courses.courses_name')
            ->join('tbl_sub_courses', 'tbl_sub_courses.id = carrier.sub_course', 'left')
            ->join('tbl_courses', 'tbl_courses.id = carrier.course', 'left')
            ->where('carrier.Status', 'N')
            ->where('carrier.Result_of_application', 'decline')
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
                'Conducted_Demo' => 'N',
                'Reshedule_date' => $date,
                'Book_Date' => $date,

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

    // public function updateFacultyForGroup($groupName, $facultyId, $selectedDate)
    // {
    //     return $this->db->table('register')
    //         ->where('groupName', $groupName)
    //         ->set($updateData)
    //         ->update();
    // }
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


    public function insert_formdata($column, $table, $insertdata)
    {
        $result['insert'] = $this->db->table($table)->insert($insertdata);
        if ($result['insert']) {
            $insertedID = $this->db->insertID();
            $result['getdata'] = $this->db->table($table)->where($column, $insertedID)->get()->getRowArray();

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
    public function getsinglerow1($table, $wherecond)
    {

        $joinConditions = [
            'tbl_sub_courses' => 'tbl_sub_courses.id = carrier.sub_course',
            'tbl_courses' => 'tbl_courses.id = carrier.course',

        ];
        $selectColumns = [
            'tbl_sub_courses.sub_courses_name as sub_course_info',
            'tbl_courses.courses_name as course_info',
        ];

        $result = $this->db->table($table)
            ->select("$table.*, " . implode(', ', $selectColumns))
            ->join('tbl_sub_courses', $joinConditions['tbl_sub_courses'], 'left')
            ->join('tbl_courses', $joinConditions['tbl_courses'], 'left')
            ->where($wherecond)
            ->get()
            ->getRow();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function  getcorcessforstudentprofile($table, $wherecond)
    {
        $result = $this->db->table($table)
            ->select("$table.*,register.country, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name")
            ->join('register', 'register.id = ' . $table . '.register_id', 'left')
            ->join('tbl_sub_courses ', 'tbl_sub_courses.id = register.sub_course', 'left')
            ->join('tbl_courses ', 'tbl_courses.id = register.course', 'left')
            ->where($wherecond)
            ->get()
            ->getRow();
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function  getAllSlots($wherecond)
    {
        $registerData = $this->db->table('register')->where('carrier_id', $wherecond)->get()->getRow();
        // print_r($registerData);die;
        if ($registerData) {
            $registerId = $registerData->id;
            $result = $this->db->table('schedule')->where('faculty_register_id', $registerId)->get()->getResult();
            if ($result) {
                return $result;
            } else {
                return false;
            }
        } else {
            // If no data is found in the 'register' table, return false
            return false;
        }
    }
    public function getalldata($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getResult();

        // echo $this->db->getLastQuery();
        // die;
        // echo '<pre>';
        // print_r($result);
        // die;
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function getalldatadesc($table, $wherecond, $orderBy = null, $orderByDirection = 'desc')
    {
        $query = $this->db->table($table)->where($wherecond);

        if ($orderBy !== null) {
            $query->orderBy($orderBy, $orderByDirection);
        }

        return $query->get()->getResult();
    }


    public function get_single_data($table, $wherecond)
    {
        $result = $this->db->table($table)->where($wherecond)->get()->getRow();

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
        // $chat = $this->db->query("SELECT * FROM " . $tablechat . " WHERE (sender_id = " . $sender . " AND receiver_id = " . $receiver . ") OR (sender_id = " . $receiver . " AND receiver_id = " . $sender . ") ORDER BY msg_id");

        
        $chat = $this->db->query("
        SELECT c.*, r1.full_name AS sender_name, r2.full_name AS receiver_name
        FROM " . $tablechat . " AS c
    LEFT JOIN register AS r1 ON c.sender_id = r1.id
    LEFT JOIN register AS r2 ON c.receiver_id = r2.id
    WHERE (c.sender_id = " . $sender . " AND c.receiver_id = " . $receiver . ") 
       OR (c.sender_id = " . $receiver . " AND c.receiver_id = " . $sender . ")
    ORDER BY c.msg_id
");

// echo "<pre>";print_r($chat);exit();

        $user = $this->db->query("SELECT id, full_name, role FROM register WHERE id = " . $receiver . " ");
        // echo '<pre>';print_r($this->getLastQuery());die;
        //$result = $this->db->table($table)->where($wherecond2.' OR ' .$wherecond3)->get()->getResult();

        // echo "<pre>";print_r($user);exit();

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

    public function  studentsgroup($group)
    {

        $grouplist = $this->db->table('register')
            ->Where('groupName', $group)
            ->get()
            ->getResult();
        //  echo $this->db->getLastQuery();die;
        return $grouplist;
    }
    public function getcorce()
    {
        return $this->db->table('register')->distinct()
            ->select('course')
            ->where('course IS NOT NULL', null, false) // Adding the condition for 'groupName' is not null
            ->get()
            ->getResultArray();
    }
    public function getsubcorce()
    {
        return $this->db->table('register')->distinct()
            ->select('sub_course')
            ->where('sub_course IS NOT NULL', null, false) // Adding the condition for 'groupName' is not null
            ->get()
            ->getResultArray();
    }


    public function insert_payment($insertdata)
    {

        $sql = "insert into payment_details (";
        $sql1 = " values ( ";

        if (isset($insertdata->error)) {
            foreach ($insertdata->error as $key => $value) {
                if (is_object($value)) {
                    $d = json_encode($value);
                    $sql1 .= '"' . htmlspecialchars($d) . '", ';
                    $sql .= htmlspecialchars($key) . ', ';
                } else {
                    $sql .= htmlspecialchars($key) . ', ';
                    $sql1 .= '"' . htmlspecialchars($value) . '", ';
                }
            }
        } else {
            foreach ($insertdata as $key => $value) {
                if (!is_object($value)) {
                    $sql1 .= '"' . htmlspecialchars($value) . '", ';
                    $sql .= htmlspecialchars($key) . ', ';
                }
                if (is_object($value)) {
                    foreach ($value as $ke => $val) {
                        $sql .= htmlspecialchars($ke) . ', ';
                        $sql1 .= '"' . htmlspecialchars($val) . '", ';
                    }
                }
            }
        }

        $res = substr($sql, 0, strlen($sql) - 2) . ")";
        $res1 = substr($sql1, 0, strlen($sql1) - 2) . ")";
        $result = $this->db->query($res . $res1);


        $this->db->table('register')
            ->where('id', $_SESSION['sessiondata']['id'])
            ->update(['Payment_status' => 'Y']);


        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getGroupsForCourse($course, $subcourse)
    {
        $grouplist = $this->db->table('register')
            ->where('course', $course)
            ->where('sub_course', $subcourse)
            ->where('SessionType', 'GroupSession') // Add this condition
            ->where('groupName IS NOT NULL') // Add this condition
            ->get()
            ->getResult();

        //   echo $this->db->getLastQuery();die;

        return $grouplist;
    }

    public function getRecordsBefore7Days()
    {
        $sevenDaysAgo = date('Y-m-d', strtotime('-7 days'));

        $query = $this->db->table('carrier')
            ->where("DATE(Booking_Date_Time) >= ", $sevenDaysAgo)
            ->where("DATE(Booking_Date_Time) <= ", date('Y-m-d'))
            ->where('Result_of_application', 'Pending') // Add this line
            ->get();
        //    echo $this->db->getLastQuery();die;
        return $query->getResult();
    }
    public function chechk_courses_id_id($courses_id, $sub_courses_name)
    {
        $result = $this->db->table('tbl_sub_courses')
            ->where('is_deleted', 'N')
            ->where('courses_id', $courses_id)
            ->where('sub_courses_name', $sub_courses_name)
            ->get()
            ->getRow();

        if (!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }



    public function chechk_sub_courses_name_id($courses_id, $sub_courses_name)
    {
        $result = $this->db->table('tbl_sub_courses')
            ->where('is_deleted', 'N')
            ->where('sub_courses_name', $sub_courses_name)
            ->where('courses_id', $courses_id)
            ->get()
            ->getRow();

        if (!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }

    public function fetchattandance()
    {
        $result = $this->db->table('student')->get()->getResult();
        return $result;
    }


    public function getpaymentdata()
    {
        $query = $this->db->table('payment')
            ->select('payment.*, register.full_name')
            ->join('register', 'register.id = payment.user_id')
            ->get()
            ->getResult();

        return $query;
    }
    public function chatfaculty($table, $wherecond)
    {
        $query['chatuser'] = $this->db->table('' . $table . ' r')
            ->select('r.*, s.Assign_Techer_id')
            ->join('student s', 'r.id = s.Assign_Techer_id', 'left')
            ->where($wherecond)
            ->get()->getRow();
        //    echo $this->db->getLastQuery();die;
        return $query;
    }


    public function jointhreetables($select, $table1, $table2, $table3, $joinCond, $joinCond2, $wherecond, $type)
    {
        $result = $this->db->table($table1)  // Use $table1 variable here
            ->select($select) 
            ->join($table2, $joinCond, $type)
            ->join($table3, $joinCond2, $type)
            ->where($wherecond)
            ->get()
            ->getResult();        
        //    echo $this->db->getLastQuery();die;
        return $result;
    }

    

    public function jointhreetableswwc($select, $table1, $table2, $table3, $joinCond, $joinCond2, $type)
    {
        $result = $this->db->table($table1)  // Use $table1 variable here
            ->select($select) 
            ->join($table2, $joinCond, $type)
            ->join($table3, $joinCond2, $type)
            ->get()
            ->getResult();        
        //    echo $this->db->getLastQuery();die;
        return $result;
    }


    public function joinfourtables($select, $table1, $table2, $table3, $table4, $joinCond, $joinCond2, $joinCond3, $wherecond, $type)
    {
        $result = $this->db->table($table1)  // Use $table1 variable here
            ->select($select) 
            ->join($table2, $joinCond, $type)
            ->join($table3, $joinCond2, $type)
            ->join($table4, $joinCond3, $type)
            ->where($wherecond)
            ->get()
            ->getResult();        
        //    echo $this->db->getLastQuery();die;
        return $result;
    }
    

    public function joinfourtableswwc($select, $table1, $table2, $table3, $table4, $joinCond, $joinCond2, $joinCond3, $type)
    {
        $result = $this->db->table($table1)  // Use $table1 variable here
            ->select($select) 
            ->join($table2, $joinCond, $type)
            ->join($table3, $joinCond2, $type)
            ->join($table4, $joinCond3, $type)
            ->get()
            ->getResult();        
         return $result;
    }


    public function joinfourtablessingle($select, $table1, $table2, $table3, $table4, $joinCond, $joinCond2, $joinCond3, $wherecond)
    {
        $result = $this->db->table($table1)  // Use $table1 variable here
            ->select($select) 
            ->join($table2, $joinCond)
            ->join($table3, $joinCond2)
            ->join($table4, $joinCond3)
            ->where($wherecond)
            ->get()
            ->getRow();   
           return $result;
    }


    public function joinfivetables($select, $table1, $table2, $table3, $table4, $table5, $joinCond, $joinCond1, $joinCond2, $joinCond3, $wherecond, $type)
    {
        $result = $this->db->table($table1)
        ->select($select)
        ->join($table2, $joinCond, $type)
        ->join($table3, $joinCond1, $type)
        ->join($table4, $joinCond2, $type)
        ->join($table5, $joinCond3, $type)
        ->where($wherecond)
        ->get()
        ->getResult();
        return $result;
    }


    public function getalldatawwc($table)
    {
        $result = $this->db->table($table)->get()->getResult();

  
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }



    public function getalldataforstudent($table, $wherecond, $selectedDays)
{
    if (!empty($selectedDays)) {
        $result = $this->db->table($table)
            ->where($wherecond)
            ->whereIn('Daystype', $selectedDays)
            ->get()
            ->getResult();
    }

    if ($result) {
        return $result;
    } else {
        return false;
    }
}






}
