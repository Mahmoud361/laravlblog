
{{--@if(isset($student))--}}
    {{--$fristName = $student->fristName;--}}
    {{--$lastname = $student->lastName;--}}
    {{--$email = $student->email;--}}
    {{--$address = $student->address;--}}
    {{----}}
{{--@endif--}}

<form name="signupForm" onsubmit="return (validateForm())" action="{{isset($student->id)? 'signup':null}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{ $student->id or ''}}">
    frist Name: <input type="text" name="fristName" value="{{$student->fristName or ''}}">
    last Name:  <input type="text" name="lastName" value="{{$student->lastName or ''}}">
    email:      <input type="email" name="email" value="{{$student->email or ''}}">
    Address:    <input type="text" name="address" value="{{$student->address or ''}}">
    <input type="submit" value="Submit">
</form>