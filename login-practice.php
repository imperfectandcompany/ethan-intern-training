<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
  <title>
  Ethans Practice Login Page
   </title>
</head>
<body class="flex-col mx-auto pt-20 bg-red-200">

<!-- allows us to define what type of method the information is going to be processed through using the method attribute ie. POST method vs GET method. Also allows us to define 
where the information is being sent, it could be sent to the same page or another page using the attribute action-->
<div class="flex-col bg-red-200 text-center mx-auto">
<form class="justify-center">
<div>
<input placeholder="Username/Email" class="justify-center m-3 p-1 rounded-md shadow-lg"></input>
</div>
<input placeholder="Password" class="justify-center m-3 p-1 rounded-md shadow-lg"></input>
<!-- allows us to deinf if this button pertains to a submission using the attribute-->
<button class="flex hover:bg-blue-300 bg-blue-400 border-blue-100 outline-5 mx-auto text-grey-300 hover:text-grey-400 p-1 rounded-md shadow-md">Sign In</button>
</form>
</div>
</body>
</html>