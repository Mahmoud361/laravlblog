<html>

    <head>
        <title>Task1</title>

        <script>
            function validateForm() {
                var fristName = document.forms.signupForm.fristName.value;
                var lastName  = document.forms.signupForm.lastName.value;
                var address = document.forms.signupForm.address.value;
                if(fristName.length > 255 || fristName.length < 1 ){
                    alert('insert valid fristName');
                    return false;
                }else if(lastName.length > 255 || lastName.length < 1){
                    alert('insert valid lastName');
                    return false;
                }else if(address.length > 255 || address.length < 1){
                    alert('insert valid address');
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