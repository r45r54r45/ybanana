<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Freshman Yosnei</title>
  <!-- Bootstrap core CSS -->
  <link href="/src/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <link href="/src/css/common.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.min.css">
  <script src="/src/js/jquery.js"></script>
  <script src="/src/js/bootstrap.min.js"></script>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/js/bootstrap-select.min.js"></script>
  <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
  <script type="text/javascript">
    var ref = new Firebase("https://sizzling-inferno-3457.firebaseio.com/");
    // order class
    var Order=function(){
      this.order=[];
      Order.prototype.makeOrder= function(menuName,option,price){
        var menuData={name:menuName,option:option,price:price};
        this.order.push(menuData);
      }
    }
    function pushCPS(companyName){
      var data={"time":Firebase.ServerValue.TIMESTAMP};
      ref.child("advertisement").child(companyName).child("cps").push(data);
    }
    // var order={'menu':[{'a':[]},{'b':['옵션1','옵션2']}],'price':54000}
    function pushOrder(companyName, order){
      var total=0;
      for(var i in order){
        total+=order[i].price;
      }
      var data=$.extend(order,{"totalPrice":total},{"time":Firebase.ServerValue.TIMESTAMP});
      ref.child("advertisement").child(companyName).child("order").push(data);
    }
  </script>


</head>
<body style="font-family: 'Open Sans', sans-serif;">
