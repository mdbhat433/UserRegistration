@extends('main')

@section('content')


<div class="row setup-panel">

<div class="col-md-2 col-sm-offset-1">
<h3 style="margin-top:60px;">Add User :</h3>
 <!-- <ul class="nav nav-pills nav-justified thumbnail setup-panel navigation-link-rounded"> -->
 <ul class="nav nav-pills nav-stacked thumbnail setup-panel navigation-link-rounded" style="height:300px;">

            <li class="active " style="height:100px;">
            <a href="#step-1">
                <h4 class="list-group-item-heading ">Step 1</h4>
                <p class="list-group-item-text">Define Profile</p>
            </a>
            </li>
            <li class="disabled"  style="height:100px;">
            <a href="#step-2">
                <h4 class="list-group-item-heading">Step 2</h4>
                <p class="list-group-item-text">Address</p>
            </a>
            </li>
                 
                   
 </ul>

 </div>
 <!-- </div> -->


<form method="POST" action="{{ route('users.store') }}" accept-charset="UTF-8" role="form" name="form" id="form">
{{ csrf_field() }}
<div class="row setup-content " id="step-1">
<div class="form-horizontal col-md-8" style="margin-top: 95px;">

    <div class="panel panel-default">
    <div class="panel-heading" >Step 1 : Define Profile</div>
    <div class="panel-body">

                    <div class="form-group">
                    <label class="col-md-4 control-label">First Name <span class="asterisk">*</span></label>
                    <div class="col-md-6">
                    <input id="fname" class="form-control" required="" maxlength="30" name="fname" type="text" value="">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label">Last Name <span class="asterisk">*</span></label>
                    <div class="col-md-6">
                    <input id="lname" class="form-control" required="" maxlength="30" name="lname" type="text" value="">
                    </div>
                    </div>

                  
                    <div class="form-group">
                    <label class="col-md-4 control-label"> Date Of Birth <span class="asterisk">*</span></label>
                    <div class="col-md-6">
                    <div class='input-group date'>
                    <input type='text' class="form-control" name="dob" placeholder="dd/mm/yyyy" id="date" value="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                  
                   </div>
                   </div>
  

                   

                    <div class="form-group">
                    <label class="col-md-4 control-label"> Gender <span class="asterisk">*</span></label>
                    <div class="col-md-6">
                    <label class="radio-inline">
                   <input type="radio" name="gender" id="gender"  value="Male">Male
                    </label>
                    <label class="radio-inline">
                   <input type="radio" name="gender" id="gender" value="Female">Female
                  </label>
                   </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label">Email Id <span class="asterisk">*</span></label>
                    <div class="col-md-6">
                    <input class="form-control" id ="email" required="" name="email" type="text" value="">
                    </div>
                    </div> 

                    <div class="form-group">
                    <label class="col-md-4 control-label">Password <span class="asterisk">*</span></label>
                    <div class="col-md-6">
                    <input class="form-control"  id="password" required="" name="password" type="password" value="">
                    </div>
                    </div> 

                  


           

                         
    </div>
    </div>
                                   
                  
                  
<div class="col-md-offset-8">
<div class="btn-toolbar">
<button id="activate-step-2"  class="btn btn-primary btn-md pull-right nextBtn" type="button" ><i class="fa fa-btn fa-arrow-right" aria-hidden="true"></i>Next</button>
<a class="btn btn-default pull-right" href="/">Cancel</a>
</div>
</div> 
    
</div>
</div>



       


<!-- </div> -->
        
<div class="row setup-content hide" id="step-2">

<div class="form-horizontal col-md-8" style="margin-top: 95px;">   
    <div class="panel panel-default">
        <div class="panel-heading">Step 2 : Address</div>
    <div class="panel-body">


                <div class="form-group">
                <label class="col-md-4 control-label">Address <span class="asterisk">*</span></label>
                <div class="col-md-6">
                <input  class="form-control" id="address" required="" maxlength="20" name="address" type="text" value="">
                </div>
                </div>

                
                <div class="form-group">
                <label class="col-md-4 control-label" for="country">  Country <span class="asterisk">*</span></label>
                 <div class="col-md-6">          
                  <select class="form-control"  name="country" id="country" value="Select Country"><option>Select Country</option>
                  
                   <option value="India" name="country">India</option>
                   <option value="Saudi Arabia" name="country">Saudi Arabia</option>
                   <option value="USA" name="country">USA</option>
                   </select>

               </div>
                </div>


                <div class="form-group">
                <label class="col-md-4 control-label" for="state"> State <span class="asterisk">*</span></label>
                 <div class="col-md-6">          
                  <select class="form-control" name="state" id='state'><option>Select State</option>
                  
        
                   </select>

                </div>
                </div> 
            
            

                <div class="form-group">
                <label class="col-md-4 control-label" for="city"> City <span class="asterisk">*</span></label>
                 <div class="col-md-6">          
                  <select class="form-control" name="city" id="city"><option>Select City</option>

                   </select>


                </div>
                </div> 
  

       
    </div>
    </div>
    

<div class="col-md-offset-8">
<div class="btn-toolbar">
<button id="addNewUser" type="submit" class="btn btn-success btn-md pull-right" ><i class="fa fa-btn fa-plus-square" aria-hidden="true"></i>Add User</button>
<a id="back-step-1" class="btn btn-warning pull-right btnPrevious" ><i class="fa fa-btn fa-arrow-left" aria-hidden="true"></i>Previous</a>
 </div>
</div> 


    
</div>
    </div>

</div>
</div>


</div>


</form> 


<script type="text/javascript">

   

$(document).ready(function($) {

// Activate Next Step
 var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');
        //allNextBtn = $('.nextBtn');
        // allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');
        
        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.addClass('hide');
            $target.removeClass('hide');
        }
    });
 
$('#activate-step-2').click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
           curInputs = curStep.find("input[id='fname'],input[id='lname'],input[id='email'],input[id='password']"),
        
          isValid = true;
 
         $(".form-group").removeClass("has-error");
         for(var i=0; i<curInputs.length; i++){

         
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
        if($('#date').val()==''){
            isValid = false;
        $('#date').closest(".form-group").addClass("has-error");
        }

        if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) ) {
            isValid = false;
            $('#gender').closest(".form-group").addClass("has-error");
        }

   
     }
      if (!isValid){
            return; 
      }
        
      nextStepWizard.removeAttr('disabled').trigger('click');
         if($(this).attr('id') =='activate-step-2')
         {
           
            $('ul.setup-panel li:eq(1)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-2"]').trigger('click');
         }
       
        });

$('#addNewUser').click(function(){

    var     curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        
          isValid = true;
         $(".form-group").removeClass("has-error");

   if($('#address').val()==''){
    isValid=false;
    $('#address').closest(".form-group").addClass("has-error"); 
    }

    if($('#country').val()=='Select Country'){
    isValid=false;
    $('#country').closest(".form-group").addClass("has-error"); 
    }

    
    if($('#state').val()=='Select State'){
    isValid=false;
    $('#state').closest(".form-group").addClass("has-error"); 
    }

    if($('#city').val()=='Select City'){
    isValid=false;
    $('#city').closest(".form-group").addClass("has-error"); 
    }


});



// Activate Previous Button
$('.btnPrevious').click(function(){
    
    if($(this).attr('id') =='back-step-1')
    {
        $('ul.setup-panel li a[href="#step-1"]').trigger('click');
    }
  
});



        //State
        $("#country").change(function(){
            if($(this).val()=='Select Country'){
                
              $("#state").html('');
              $("#state").html("<option value='Select State'>Select State</option>");
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option>")
        
            }
        });

        $("#country").change(function(){
            if($(this).val()=='India'){
                
              $("#state").html('');
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option>")
              $("#state").html("<option value='Select State'>Select State</option><option value='Jammu and kashmir'>Jammu and kashmir</option><option value='Delhi'>Delhi</option>");
            }
           
        });
            $("#country").change(function(){
            if($(this).val()=='Saudi Arabia'){
                
              $("#state").html('');
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option>")
              $("#state").html("<option value='Select State'>Select State</option><option value='Jeddah'>Jeddah</option><option value='Makkah'>Makkah</option>");
            }
            
        });

        $("#country").change(function(){
            if($(this).val()=='USA'){
                
              $("#state").html('');
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option>")
              $("#state").html("<option value='Select State'>Select State</option><option value='Los Angles'>Los Angles</option><option value='Texas'>Texas</option>");
            }
            
        });

        //City

        $("#state").change(function(){
            if($(this).val()=='Jammu and kashmir'){
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option><option value='Srinagar'>Srinagar</option><option value='Budgam'>Budgam</option>");
            }
        
          
        });
        $("#state").change(function(){
            if($(this).val()=='Delhi'){
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option><option value='Noida'>Noida</option><option value='Okhla'>Okhla</option>");
            }
        });
        
        $("#state").change(function(){
            if($(this).val()=='Jeddah'){
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option><option value='Riyadh'>Riyadh</option><option value='Qatif'>Qatif</option>");
            }
        });
        $("#state").change(function(){
            if($(this).val()=='Makkah'){
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option><option value='Taif'>Taif</option><option value='Tabuk'>Tabuk</option>");
            }
        });
        $("#state").change(function(){
            if($(this).val()=='Los Angles'){
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option><option value='Manhatten'>Manhatten</option><option value='Virgenia'>Virgenia</option>");
            }
        });
        $("#state").change(function(){
            if($(this).val()=='Texas'){
              $("#city").html('');
              $("#city").html("<option value='Select City'>Select City</option><option value='New Jersey'>New Jersey</option><option value='Alaska'>Alaska</option>");
            }
        });

        // $("#date") .datepicker({ dateFormat: 'dd-mm-yy' }).val();
        $( "#date" ).datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "1950:2015"
    });	
    


});





</script>


@endsection