<!DOCTYPE html>
<html>
<head>
   <title></title>
   <?php include 'link/links.php'; ?><!---way to link 2 php files--->
  <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<!---https://getbootstrap.com/docs/4.0/components/navbar/ --->
  <nav class="navbar navbar-expand-lg nav_style p-3"><!--- p-3=padding increase--->
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <!--- below code make it responsive --->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!---below code is when open in mobile--->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize"><!---shift the rest tabs to right (margin-left=ml) & padding-right=pr--->
      <li class="nav-item active"><!---text-capitalize=capitalizes first word--->
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>

  </div>
</nav>
<div class="main_header">
  <div class="row w-100 h-100">
    <!---below code lappy display dimension , mobile dimension=large devices size one above one --->
     <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
       <div class="leftside w-100 h-100 d-flex
       justify-content-center align-items-center"><!---align image in center--->
         <img src="image/togetherpeople.png"width="300" height="300">
       </div>
     </div>
     <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex
        justify-content-center align-items-center">
           <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img
             src="image/virus.png" width="50"height="50"></span>na Virus</h1>
        </div>
     </div>
  </div>
</div>
<!-- **********************CORONA LATEST UPDATES********************* --->
<section class="corona_update container-fluid">
   <div class="mb-3">
     <h3 class="text-uppercase text-center">COVID-19 UPDATES</h3>
   </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
       <tr>
          <th>Country</th>
          <th>TotalConfirmed</th>
          <th>TotalRecovered</th>
          <th>TotalDeaths</th>
          <th>NewConfirmed</th>
          <th>NewRecovered</th>
          <th>NewDeaths</th>
       </tr>
    </table>
  </div>
  </div>
</section>
<!--- ***************** ABOUT SECTION ************* --->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
  </div>
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="image/what-covid-19-does-to-your-body-prev.png"class="img-fluid">
  </div>
  <div class="col-lg-6 col-md-6 col-12">
    <h2>What is COVID-19(Corona-Virus)</h2>
    <p>COVID-19 is the infectious disease caused by the most recently
     discovered corona virus. This new virus and disease were unknown
     before the outbreak began in Wuhan, China, in December 2019. </p>
    <p>Corona viruses are a large family of viruses which may cause illness
     in animals or humans. In humans, several coronaviruses are known
     to cause respiratory infections ranging from the common cold to more
     severe diseases such as Middle East Respiratory Syndrome (MERS)
     and Severe Acute Respiratory Syndrome (SARS). The most recently
     discovered coronavirus causes coronavirus disease COVID-19.
     The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.

The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
   </p>
  </div>
</div>
<!--- ********************CORONA SYMPTOMS*************************---->
<div class="container-fluid sub_section pt-5 pb-5" id="symid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus Symptoms</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center"><!--figure is to keep image in centre--->
         <img src="image/COUGH1.png"width="200"height="200"class="img-fluid">
         <figcaption>Cough</figcaption>
       </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center"><!--figure is to keep image in centre--->
         <img src="image/runnynose2.png"width="120"height="120"class="img-fluid">
         <figcaption>Runny Nose</figcaption>
       </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center"><!--figure is to keep image in centre--->
         <img src="image/fever.png"width="150"height="150"class="img-fluid">
         <figcaption>Fever</figcaption>
       </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center"><!--figure is to keep image in centre--->
         <img src="image/sick.png"width="150"height="150"class="img-fluid">
         <figcaption>Cold</figcaption>
       </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center"><!--figure is to keep image in centre--->
         <img src="image/weak1.png"width="200"height="200"class="img-fluid">
         <figcaption>Tiredness</figcaption>
       </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center"><!--figure is to keep image in centre--->
         <img src="image/breath.png"width="250"height="250"class="img-fluid">
         <figcaption>Difficulty breathing(severe cases)</figcaption>
       </figure>
      </div>
    </div>
</div>
<!--- ********************PREVENTION*************************---->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against Coronavirus</h1>
  </div>
  <div class="container">
     <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                 <figure class="text-center">
                    <img src="image/handwash.png"width="90"height="90"class="img-fluid">
                 </figure>
             </div>
             <div class="col-lg-8 col-md-8 col-12">
               <p>Clean your hands regularly.
Wash your hands with soap and water, and dry them thoroughly.</p>
             </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                 <figure class="text-center">
                    <img src="image/covernose.png"width="90"height="90"class="img-fluid">
                 </figure>
             </div>
             <div class="col-lg-8 col-md-8 col-12">
               <p>Wearing a face mask in public helps prevent the spread of COVID-19 — but only if worn properly, covering both your nose and mouth.</p>
             </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                 <figure class="text-center">
                    <img src="image/social.png"width="90"height="90"class="img-fluid">
                 </figure>
             </div>
             <div class="col-lg-8 col-md-8 col-12">
               <p>Keep a distance of at least 6 feet from other people while in communal places.</p>
             </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                 <figure class="text-center">
                    <img src="image/stayhome.png"width="90"height="90"class="img-fluid">
                 </figure>
             </div>
             <div class="col-lg-8 col-md-8 col-12">
               <p>Taking care of your mind as well as your body is really important if you are staying at home because of coronavirus (COVID-19).</p>
             </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                 <figure class="text-center">
                    <img src="image/stayinform.png"width="90"height="90"class="img-fluid">
                 </figure>
             </div>
             <div class="col-lg-8 col-md-8 col-12">
               <p>Stay informed on the latest developments with the COVID-19 Situation Summary from the CDC. </p>
             </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                 <figure class="text-center">
                    <img src="image/medicalhelp.png"width="90"height="90"class="img-fluid">
                 </figure>
             </div>
             <div class="col-lg-8 col-md-8 col-12">
               <p>Follow public health advice on school closures, avoiding crowds, and other social distancing measures to limit spread of Coronavirus (COVID-19).</p>
             </div>
           </div>
        </div>
      </div>
  </div>
</div>
<!--- ********************CONTACT US*************************---->
<div class="container-fluid pt-5 pb-5" id="contactid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Contact Us</h1>
  </div>
  <div class="container">
     <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="POST">
          <div class="form-group">
            <label >Username</label>
            <input type="text" class="form-control"name="username"
            placeholder="name"required autocomplete="off">
          </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"name="email" placeholder="name@example.com"
    required autocomplete="off">
  </div>

  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control"name="mobile"
    placeholder="mobile"required autocomplete="off">
  </div>

<div class="form-group">
  <label >Select Symptoms</label><br>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="cold">
  <label class="form-check-label" for="inlineCheckbox1">Cold</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="fever">
  <label class="form-check-label" for="inlineCheckbox2">Fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="breath">
  <label class="form-check-label" for="inlineCheckbox3">Difficulty In Breathing
</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="tired">
  <label class="form-check-label" for="inlineCheckbox3">Feeling Weak
</label>
</div>
</div>

  <div class="form-group">
    <label >Describe how you are feeling</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        </div>
    </div>
  </div>
</div>
<!--**************************FOOTER SECTION**********************--->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid ">
    <p>copyright by Abhilasha Pathak</p>
  </div>
</footer>
<!--*************JQUERY LIVE DATA FETCH*******************--->
<script>
  function fetch(){
       $.get("https://api.covid19api.com/summary",
        function(data){
          //console.log(data['Countries'].length);
          var tbval=document.getElementById('tbval');
          for(var i=1;i<(data['Countries'].length);i++){
            var x=tbval.insertRow();//insertRow inserts a new row (<tr>)in a given table ,
            // & returns a reference to the new row
            x.insertCell(0);//insertCell inserts the cell directly into row starting with 1st index
            tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];//inserting element 1st cell of
            //1st row , go inside 1st index and insert country name
            tbval.rows[i].cells[0].style.background='#7a4a91';
            tbval.rows[i].cells[0].style.color='#fff';
             x.insertCell(1);
            tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];//inserting element 1st cell of
            //1st row , go inside 1st index and insert country name
            tbval.rows[i].cells[1].style.background='#4bb7d8';
            x.insertCell(2);
           tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];//inserting element 1st cell of
           //1st row , go inside 1st index and insert country name
           tbval.rows[i].cells[2].style.background='#4bb7d8';
           x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];//inserting element 1st cell of
          //1st row , go inside 1st index and insert country name
          tbval.rows[i].cells[3].style.background='#f36e23';
          x.insertCell(4);
         tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];//inserting element 1st cell of
         //1st row , go inside 1st index and insert country name
         tbval.rows[i].cells[4].style.background='#4bb7d8';
         x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];//inserting element 1st cell of
        //1st row , go inside 1st index and insert country name
        tbval.rows[i].cells[5].style.background='#9cc850';
        x.insertCell(6);
       tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];//inserting element 1st cell of
       //1st row , go inside 1st index and insert country name
       tbval.rows[i].cells[6].style.background='#f36e23';

     }
        }
     );
  }
</script>
</body>
</html>

<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['coronasym'];
  $msg=$_POST['msg'];

  $chk="";
  foreach($symp as $chk1){
    $chk.=$chk1.",";
}
    $insertquery="insert into coronacase(username,email,mobile,symp,message)
    values('$username','$email','$mobile','$chk','$msg')";

  $query=mysqli_query($con,$insertquery)  ;

  if(!$query){
  ?>
  <script>
     alert("Insertion succesful");
  </script>
  <?php
  }else{
    ?>
    <script>
       alert("No Insertion");
    </script>
    <?php
  }


}

 ?>
