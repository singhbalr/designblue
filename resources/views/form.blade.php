<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.1/knockout-latest.debug.js"></script>



<body id ="ko-mount">

    <label>First Name</label>
    <input type="text" name = "first_name" class = "first_name"></input>
    <label>Last Name</label>
    <input type="text" name = "last_name" class = "last_name"></input>
    <label>Email</label>
    <input type="text" name ="email" class = "email"></input>
    <label>Gender</label>
        <select type="radio" name = "gender" class = "gender">
        <option value = "male">Male</option>
        <option value = "female">Female</option>
        </select>
    <label>Birthdate</label>
    <input type="date" name = "birthdate" class = "birthdate"></input>
    <button class ="submit-btn" data-bind "click: submitForm">submit</button>



        <div class ="tbl-container">
            <table class ="guestList">
                <tr>
                    <th>guest_first_name</th>
                    <th>guest_last_name</th>
                    <th>guest_email</th>
                    <th>guest_gender</th>
                    <th>guest_birthdate</th>
                    <th>guest_card_code</th>
                </tr>
    
            </table>
        </div>


</body>

<script>
    $(function(){
        console.log("ready");
    //     function formViewModel(){
    //     this.submitform = function(){
    //             console.log("CLICKED");

    //         }
    //     }


    // ko.applyBindings(new formViewModel(), document.getElementById("ko-mount"));
    axios.get("/get-guest").then(function(response){
        var guest = response.data;
        for(var index = 0; index < guest.length; index++){
            $(".guestList").append("<tr><td>"+guest[index].guest_first_name+"</td><td>"+guest[index].guest_last_name+"</td><td>"+guest[index].guest_email+"</td><td>"+guest[index].guest_gender+"</td><td>"+guest[index].guest_birthdate+"</td><td>"+guest[index].guest_card_code+"</td></tr>")
        }
    })
    $(".submit-btn").on("click", function(){
        axios.post("/post-form",
            {
                first_name : $(".first_name").val(),
                last_name : $(".last_name").val(),
                email : $(".email").val(),
                gender : $(".gender").val(),
                birthdate : $(".birthdate").val(),
            }
        ).then(function(response){
            setTimeout(function(){
                location.reload();
            }, 100)
        }).catch(function(error){
            console.log(error);
        });
    })
    })

</script>
</html>