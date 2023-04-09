<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
         @vite('resources/css/app.css')
    <title>Students</title>
</head>
<body>
  <form action="" method="POST" target="blank">
   

    @csrf
     <section class="w-[100%]">
  <div class="bg-white shadow-2xl rounded w-[60%] mx-auto my-[5%] p-5">
    <div class="w-[50%] mx-auto my-[10%]">
      <div class="container">
     <img src="https://cdn-icons-png.flaticon.com/128/1080/1080985.png" alt="" class="mx-auto ">
   </div>
   <div>
    <h1 class="text-center text-[200%] font-semibold" >
       STUDENTS REGISTER
    </h1>
   </div>
  </div>
   @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class=" class="bg-red-500/30 text-white">{{ $error }}</div>
        @endforeach
        @endif

        
        @if (session('msg'))
<div class="bg-green-500/30 text-white">
   {{ session('msg') }}</div> 
@endif
{{-- this is the Name input div --}}
  <div class="flex justify-between  mx-10">
   <div class="w-[20%]">
     <label for="name" class="font-semibold">Name</label>
   </div>
   <div class="flex justify-evenly gap-5">
     <div>
        <input type="text" name="firstname" id="Name" placeholder="Name" class="border p-2"> <br>
    <label for="">First Name</label>
    </div>
    <div>
        <input type="text" name="lastname" id="Name" placeholder="Name" class="border p-2"> <br>
        <label for="">Last Name</label>
    </div>
   </div>
  </div>
{{-- this is the gender div --}}
  <div class="grid grid-cols-2 mx-10 my-5">
    <div>
        <label for="gender" class="font-semibold">Gender</label>
    </div>
    <div class="grid grid-cols-2">
        <div>
            <input type="radio" name="gender" id="sex" value="m">
        <label for="gender">Male</label>
        </div>
        <div>
            <input type="radio" name="gender" id="sex" value="f">
        <label for="gender">Female</label>
        </div>
    </div>
  </div>
{{-- This is the age div  --}}
  <div class="grid grid-cols-2 mx-10">
    <div>
        <label for="Age" class="font-semibold">Age</label>
    </div>
    <div>
        <input type="number" name="age" id="age" placeholder="23" class="border p-2">
    </div>
  </div>
{{-- this is the class div --}}
<div class="grid grid-cols-2 mx-10 my-5">
    <div>
        <label for="" class="font-semibold">Class</label>
    </div>
    <select name="class" id="class" class="p-2 border">
         <option disabled selected>--Select Class--</option>
        <option value="jss1">JSS1</option>
        <option value="jss2">JSS2</option>
        <option value="jss3">JSS3</option>
        <option value="ss1">SS1</option>
        <option value="ss2">SS2</option>
        <option value="ss3">SS3</option>
    </select>
</div>

{{-- this is the school input div --}}
<div class="grid grid-cols-2 mx-10">
    <div>
        <label for="" class="font-semibold">School</label>
    </div>
    <div>
            <input type="text" name="school" id="school" placeholder="Input School" class="border p-2">
    </div>
</div>

{{-- this is the states div --}}
<div class="grid grid-cols-2 mx-10 my-5">
    <div>
        <label for="states" class="font-semibold">State</label>
    </div>
    <div>
        <select name="state" id="state" class="border p-2">
    <option disabled selected>--Select State--</option>
    <option value="Abia">Abia</option>
    <option value="Adamawa">Adamawa</option>
    <option value="Akwa Ibom">Akwa Ibom</option>
    <option value="Anambra">Anambra</option>
    <option value="Bauchi">Bauchi</option>
    <option value="Bayelsa">Bayelsa</option>
    <option value="Benue">Benue</option>
    <option value="Borno">Borno</option>
    <option value="Cross River">Cross River</option>
    <option value="Delta">Delta</option>
    <option value="Ebonyi">Ebonyi</option>
    <option value="Edo">Edo</option>
    <option value="Ekiti">Ekiti</option>
    <option value="Enugu">Enugu</option>
    <option value="FCT">Federal Capital Territory</option>
    <option value="Gombe">Gombe</option>
    <option value="Imo">Imo</option>
    <option value="Jigawa">Jigawa</option>
    <option value="Kaduna">Kaduna</option>
    <option value="Kano">Kano</option>
    <option value="Katsina">Katsina</option>
    <option value="Kebbi">Kebbi</option>
    <option value="Kogi">Kogi</option>
    <option value="Kwara">Kwara</option>
    <option value="Lagos">Lagos</option>
    <option value="Nasarawa">Nasarawa</option>
    <option value="Niger">Niger</option>
    <option value="Ogun">Ogun</option>
    <option value="Ondo">Ondo</option>
    <option value="Osun">Osun</option>
    <option value="Oyo">Oyo</option>
    <option value="Plateau">Plateau</option>
    <option value="Rivers">Rivers</option>
    <option value="Sokoto">Sokoto</option>
    <option value="Taraba">Taraba</option>
    <option value="Yobe">Yobe</option>
    <option value="Zamfara">Zamfara</option>
</select>
    </div>
</div>

{{-- this is the height input div --}}
<div class="grid grid-cols-2 mx-10">
    <div>
        <label for="" class="font-semibold">Height</label>
    </div>
    <div>
            <input type="text" name="height" id="school" placeholder="Input Height" class="border p-2">
    </div>
</div>

<div>
  <input type="submit" value="submit" class="border bg-blue-600 rounded-full w-[25%] p-2">
</div>

  </div>
   </section>
  </form>
</body>
</html>