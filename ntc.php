<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bidhyodaya Higher Secondary School
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <style>
    body{
        background-color: #0396CD;
    }

    .first{
        border:8px solid #84BED3;
        border-radius:5px;
        background-color: #EEEEEE;
    }


    .second{
        background-color: #EEEEEE;
        border:1px solid white;
    }

    .container .second #text1{
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        font-weight: bold;
        font-size:24px;
        color: #1099C4;
    }


    .container .second #text2{
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        font-weight: bold;
        font-size:36px;
        color: #1099C4;
    }

    .mbtn{
      background-color:#79c2ff;
      font-size: 10px;
      border-radius:5px;
      color:#fff;
      font-weight: bold;      
    }

    .mbtn:hover{
        background-color: #33AD14;
        border-radius:5px;
        color:#fff;
        font-weight: bold;
    }

    .forms{
        height:30vh;
        width:100%;
        background-color: #E7E7E7;
        border: 1px solid #ccc ;
    }

    .sym{
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;;
        font-size:15px;
    }

    .date , .labelclass{
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;;
        font-size: 15px;
    }

    

    
  </style>
  <body>
    <div class="container first mt-5">
            <div class="container second mt-4">
                <h3 class="text-center mt-2" id="text1">Bidyodaya Examination Board</h3>
                <h4 class="text-center" id="text2">CLASS X : Results 2080</h4>
                            <hr>

                            <!-- Upper part done -->
         <div class="d-flex flex-row justify-content-end">
            <button class="btn mbtn me-2">Main Page</button>
            <button class="btn mbtn">NT Homepage</button>
         </div>

         <!-- Form -->
         <div class="container forms mt-5">
            <div class="row">
                <div class="col-lg-4">
         <form action="">
            <label for="Symbol Num" class="labelclass mt-5">Symbol Num:</label>
            <input type="text" name="symbolnumber" id="" class="form-sm-control" placeholder="Eg : 00122312'A'">
            <label for="dob" class="mt-3 labelclass">Date of Birth:</label>
            <input type="text" name="dob" id="" placeholder="Eg :2000/12/21" class="form-sm-control  ">  
        </form> </div> 

        <div class="col-lg-4">
        <p class="sym mt-5">Eg : 00122312'A'</p>
        <p class="date">Data Format: YYYY/MM/DD of YY/MM/DD</p>
        </div>
    </div>  <!-- row -->
        </div>
         
          </div>   <!-- 3rd div container -->
        
     </div><!-- Container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>