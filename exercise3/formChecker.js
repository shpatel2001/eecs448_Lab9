function check()
{
  var Item1 = document.getElementById("item1").value;
  var Item2 = document.getElementById("item2").value;
  var Item3 = document.getElementById("item3").value;
  var Ship = document.getElementsByName("Shipping").value;
  var User = document.getElementById("user").value;
  var Pass = document.getElementById("pass").value;

  var itemCheck = false;
  var userCheck = false;
  var passCheck = false;


  if(Item1 == "" || Item2 == "" || Item2 == "" || Item1 < 0 || Item2 < 0 || Item3 < 0)
  {
    alert("Please selected a quantity for all items");
    itemCheck = false;
  }
  else
  {
    itemCheck = true;
  }

  
  if(validate(User))
  {
    userCheck = true;
  }
  else
  {
    alert("Invalid email")
    userCheck = false;
  }

  
  if(Pass == "")
  {
    alert("Please input your password");
    passCheck = false;
  }
  else
  {
    passCheck = true;
  }

  
  if(itemCheck && userCheck && passCheck)
  {
    return(true);
  }
  else
  {
    return(false);
  }
}


function validate(Username)
{
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(Username)
}
