var counter = 2;
$(".schedulebtn").click(function(){
    var checkcount=0;
    var checkempty1=0;
    var slot_price_flag = 0;
    
    $(".monday_start_hour").each(function(){
      // alert($(this).attr('id'));
      var getlastid=$(this).attr('id');
      var prestartval=$(this).val();
      var preendval=$('.monday_finish_hour').val();
      var newstartval=$('#monday_start1').val();
      // alert(newstartval);
      
      
    if(prestartval=='')
    {
        checkempty1=1;
        alert("Please select start time");
        $(this).focus();
        return false;
    }else if(newstartval>prestartval && newstartval<preendval){
        alert('please enter greater value than previous time');
        return false;
    } else if(preendval<prestartval){
        alert('ee');
        alert('end time should be greater than start time');
        $(this).focus();
        return false;
    } 
    else
    {
        
        var lastFour = parseInt(getlastid.substr(getlastid.length - 4));
        // alert(lastFour);
        var prvid="end"+(lastFour-1);
        //alert(prvid); 
        //alert($("#"+prvid).val());
        var endval=$("#"+prvid).val()
        if(prestartval>endval)
        {
            alert('eeasdas');
          checkcount=1;
          alert("please enter greater value than previous time");
          $(this).val("");
          return false;
        }
    }
      
      
    });       

    var checkcount_ftime=0;
    var checkempty=0;
    $(".monday_finish_hour").each(function(){
      // alert($(this).attr('id'));
      var getlastid=$(this).attr('id');
      var endval1=$(this).val();
      var lastFour = parseInt(getlastid.substr(getlastid.length - 4));
      var prvid1="monday_finish_hour"+(lastFour);
      var prestartval=$("#"+prvid1).val();
      //alert(endval1);
      //alert(prestartval);
      if(endval1=='')
      {
        checkempty=1;
        alert("Please select end time");
        $(this).focus();
        return false;
        
      } 
      else{
        
        if(prestartval>endval1)
        {
          checkcount_ftime=1;
          alert("please enter greater value than start time");
          $(this).val("");
          return false;
        }
      }
    });
    
    if(checkcount==1)
    {
      return false;
    }
    if(checkcount_ftime==1)
    {
      return false;
    }
    if(checkempty==1)
    {
      return false;
    }
      if(checkempty1==1)
    {
      return false;
    }
});

var mondaycounter=0;
var monday_end = document.getElementById("monday_end0");
var monprevalue = parseInt(mondaycounter);
var mon_start = $('#monday_end0').val();

$(".add_new_slot_details_btn").click(function(e){
    e.preventDefault();  
    var mon_start = $('#monday_end'+mondaycounter+'').val();

    var stime = [];
    $.each($('.start-hour'), function (i, item) 
    {
        var val = $(this).val(); 
        stime.push( val );
    });

var etime = [];
$.each($('.monday-finish-hour'), function (i, item) 
{
    var val = $(this).val(); 
    etime.push( val );
});

for(var i=0; i < stime.length; i++) 
{
    for(var j=i+1; j < stime.length; j++) 
    {
    if(stime[i] == stime[j] && stime[i] !=  "" && stime[j] != "" && etime[i] != "" && etime[j] != "" )
    {
        alert("Same time not allowed..");
        return false;
        
    } else if( stime[j] < stime[i] && stime[j] != "" ){
        alert('Time already taken, please select another!');
        return false;
    }
    }
}

for(var s=0; s < stime.length; s++) 
{
    for(var r=s; r < etime.length; r++) 
    {
    if(stime[s] == etime[r] && etime[r] !=  "" )
    {
        alert("Same time not allowed");
        return false;
        
    }else if( etime[r] < stime[s] ){
        alert('End time should be greater than start time ');
        return false;
    }  
    }
}

for(var d=0; d < etime.length; d++) 
{
    for(var t=d+1; t < stime.length; t++) 
    {
    if(stime[t] < etime[d] && stime[t] !=  "" )
    {
        alert("Select another time slot");
        return false;
    }
    }
}

monprevalue++;

var timeToadd = "01:00:00".split(":");  // Time to be added in min
var ms = (60 * 60 * parseInt(timeToadd[0]) + 60 * (parseInt(timeToadd[1])) ) * 1000;

var newTime =new Date('1970-01-01T' + mon_start ).getTime() + ms
var finalTime = new Date(newTime).toLocaleString('en-GB').slice(12 ,20)

// if(mondaycounter <  4 && monday_end.value != "") {
if( monday_end.value != "") {
    var add_new_slot_details = '<div class="form-group slot_block_'+mondaycounter+' col-lg-4 col-md-6"><input type="time" name="START_TIME[]" value="'+mon_start+'" class="form-control start-hour" id="monday_start1'+parseInt(mondaycounter)+'"/> </div><div class="form-group slot_block_'+mondaycounter+' col-lg-4 col-md-6"><input type="time" id="monday_end'+parseInt(monprevalue)+'" name="END_TIME[]" value="'+finalTime+'" class="form-control monday-finish-hour"/><input type="hidden" name="DAY_ARRAY[]" value="Monday" /></div><input type="hidden" name="DAY_ARRAY[]" value="Monday" /></div><div class="form-group slot_block_'+mondaycounter+' col-lg-4 col-md-6"><button type="button" class="btn btn-primary waves-effect waves-light btn-warning" onclick="return remove_slot_block('+mondaycounter+');"><i class="fas fa-trash-alt"></i></button></div></div></div><hr class="slot_block_'+mondaycounter+'"> ';
    $(".dynamic_add_slot").append(add_new_slot_details);
}
mondaycounter++;

$('input[id*="monday_start"] , .monday-finish-hour').focusout(function(){
    var stime = [];
    $.each($('.start-hour'), function (i, item) 
    {
        var val = $(this).val(); 
        stime.push( val );
    });
    
    var etime = [];
    $.each($('.monday-finish-hour'), function (i, item) 
    {
        var val = $(this).val(); 
        etime.push( val );

    });
    
    for(var i=0; i < stime.length; i++) 
    {
        for(var j=i+1; j < stime.length; j++) 
        {
        $(".error").remove();
        if(stime[i] == stime[j] && stime[i] !=  "" && stime[j] != "" && etime[i] != "" && etime[j] != "" )
        {
            $('.mon_err').after('<div class="error"> Same time not allowed</div>');  
            return false;
            
        } else if( stime[j] < stime[i] && stime[j] != "" ){
            $('.mon_err').after('<div class="error">Time already taken, please select another!</div>');  
            return false;
        }
        }
    }

    for(var s=0; s < stime.length; s++) 
    {
        for(var r=s; r < etime.length; r++) 
        {
        if(stime[s] == etime[r] && etime[r] !=  "" )
        {
            $('.mon_err').after('<div class="error"> Same time not allowed</div>');
            return false;
            
        }else if( etime[r] < stime[s] ){
            $('.mon_err').after('<div class="error"> End time should be greater than start time</div>');
            return false;
        }  
        }
    }

    for(var d=0; d < etime.length; d++) 
    {
        for(var t=d+1; t < stime.length; t++) 
        {
        if(stime[t] < etime[d] && stime[t] !=  "" )
        {
            $('.mon_err').after('<div class="error"> Select another time slot</div>');
            return false;
        }
        }
    }
});
});
function remove_slot_block(id) {
$(".slot_block_"+id).remove();
monprevalue--;
mondaycounter--;
}

function Validate_monend() {
    var monday_end = document.getElementById("monday_end0");
    if (monday_end.value == "") {
      mondaycounter--;
      monprevalue--;
        //If the "Please Select" option is selected display error.
        alert("Please select monday start and end time!");
        return false;
    }
    return true;
}