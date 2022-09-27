<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="hero">
    <div class="container-fluid">
        <div class="container-mb3" style="min-height: 60vh">
             <div class="row heading">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Sum</th>
                    <th  style="width:160px;"><a style="color: #272727;" href="" >
                        <i class="glyphicon glyphicon-plus"></i>Order</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><span>&#8363;</span></td>
                        <td>
                        <img src="./Image/{{c.Image}}" style="height: 100px; width: 100px;">
                       </td>
                        <td><span>&#8363;</span></td>
                        <td><a style="color: #272727; margin-left:10px;" href="" class="glyphicon glyphicon-pencil"></a> 
                        <a style="color: #272727; margin-left:10px;" href="" class="glyphicon glyphicon-remove"></a></td>    
                    </tr>
                    <tr>
                        <td><b>Total price</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span>&#8363;</span></td>
                    </tr>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</section>
</body>
</html>