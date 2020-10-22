<?php



return [
    //user validation email and password
    'wrongEmail' => 'This Email  is wrong.',
    'wrong_password'=>'Your password is wrong try again.',
    'wrong_email'=>'There is no account with this email.',
    //reset password
    'resetPassword'=>'Check your email we sent a link to reset your password',

    //user update profile
    'edit'=>'Updated Successfully',
    'not_edit'=>'Something went wrong in update operation !!',

    //fail and success msg generally
    'ok' => ' Done Successfully',
    'fail' => 'Something went wrong !!',
    'whoops' => 'Something went wrong !!',

    //fail and success msg for get data and search
    //for university
    'all_university_success'=>'Universities retrieved successfully.',
    'all_university_fail'=>'There is no universities to retrieve !!',
    //for specialist
    'all_specialist_success'=>'Specialists retrieved successfully.',
    'all_specialist_fail'=>'There is no specialists to retrieve !!',
    //for subject
    'all_subject_success'=>'Subjects retrieved successfully.',
    'all_subject_fail'=>'There is no subjects to retrieve !!',
    //for teacher sort
    'all_teacher_success'=>'Teachers retrieved successfully.',
    'all_teacher_fail'=>'There is no teachers to retrieve !!',
    //get teachers of specific subject
    'subject_teacher_success'=>'Teachers of this subject retrieved successfully.',
    'subject_teacher_fail'=>'There is no teachers for this subject to retrieve !!',
    //for rate and review
    'rate_fail'=>'You rated the teacher before !!',
    'rate_success'=>'You rated the teacher successfully',
    'rate_show_success'=>'The reviews of the teacher retrieved successfully',
    'rate_show_fail'=>'Teacher does not have any reviews yet !!',
    //error msg that you are teacher
    'already_teacher'=>'You upgrade your account to teacher account already !!',
    'upgrade_to_teacher'=>'You upgrade your account to teacher successfully wait email to confirm your request',
    //request teacher from student
    'request_teacher_success'=>'Your request sent successfully to teacher wait teacher confirmation',
    'request_teacher_fail'=>'Something went wrong in request teacher operation !!',
    //get avaliable times for teacher
    'teacher_avaliable_time_success'=>'Teacher avaliable times retrieved successfully',
    'teacher_avaliable_time_fail'=>'There is no avaliable times for this teacher to retrieve !!',
    //show student requests
    'student_requests_show_success'=>'Student requests retrieved successfully',
    'student_requests_show_fail'=>'There is no requests for the Student to retrieve !!',
    //show student requests
    'teacher_orders_show_success'=>'Teacher orders retrieved successfully',
    'teacher_orders_show_fail'=>'There is no orders for the teacher to retrieve !!',
    //msg error to request yourself as teacher
    'request_yourself'=>'you can not request yourself as teacher !!',
    //msg error time is booked already
    'time_booked'=>'This time is already booked for this teacher already try another time !!',
    //retrieve teacher details
    'teacher_details_success'=>'The teacher details retrieved successfully',
    'teacher_details_fail'=>'There is no teacher details to retrieve !!',
    //show student or teacher transactions
    'user_transaction_success'=>'The user transactions retrieved successfully',
    //empty data returned
    'empty'=>'There is no data to show',
    //teacher rate himself
    'rate_yourself'=>'You can not rate yourself !!',
];