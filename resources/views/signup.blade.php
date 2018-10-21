<html>

    <head>
        <title>Task1</title>

        <script>
            function validateForm() {
                var fristName = document.forms.signupForm.fristName.value;
                var lastName  = document.forms.signupForm.lastName.value;
                var address = document.forms.signupForm.address.value;
                if(fristName.length > 6 ){
                    alert('fristName should bee less than 6');
                    return false;
                }else if(lastName.length > 6){
                    alert('lastName should bee less than 6');
                    return false;
                }else if(address.length > 6){
                    alert('address should bee less than 6');
                    return false;
                }
                 return true;
            }

        </script>
    </head>
    <body>
        @include('form')
    </body>
</html>