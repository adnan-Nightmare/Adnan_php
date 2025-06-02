<?php 
    include 'src/controller/login.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Adnan_RPL</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/42eebd283f.js" crossorigin="anonymous"></script>
  </head>
  <body class="flex justify-center bg-[#F7F7F9]">
    <div class="mt-45">
      <div class="flex justify-center flex-col items-center">
        <h1 class="text-4xl font-semibold capitalize text-gray-800 border-b-3 border-[#41E2BA] pb-3">Login</h1>
        <p class="mt-6 text-sm font-semibold text-gray-800 text-center">
          Masukan email dan password dengan benar!!! <br />
          Jika anda belum mempunyai akun silahkan, <a href="#" class="text-blue-700">Register</a>
        </p>
      </div>

      <form method="post" class="mt-14 w-96">
        <div class="flex flex-col">
          <input placeholder="Username" type="text" name="username" value="<?= $_SESSION['old'] ?? '' ?>" id="email" class="border-b border-gray-400 px-3 py-1.5 mt-1 outline-none" required />
        </div>
        <div class="flex flex-col mt-5 relative">
          <input placeholder="Password" type="password" name="password" id="password" class="border-b border-gray-400 px-3 py-1.5 mt-1 outline-none" required />
          <button type="button" id="btnPassword" class="absolute right-2 top-3 cursor-pointer"><i class="text-sm far fa-eye-slash"></i></button>
        </div>
        <div class="flex justify-between">
            <a href="#" class="text-blue-700 text-sm font-semibold mt-1">Lupa password</a>
            <p class="text-sm font-semibold mt-1 text-red-500">
                <?php 
                    echo ($_SESSION['err'] ?? '');  
                    unset($_SESSION['err']);
                ?>
            </p>
        </div>

        <button type="submit" name="submit" class="bg-[#41E2BA] text-white w-full rounded py-1.5 mt-10 cursor-pointer">Submit</button>
      </form>
    </div>

    <?php 
        if(isset($_SESSION['err'])){
        unset($_SESSION['err']);
    }
    ?>

    <script>
      const password = document.getElementById("password");
      const btnPassword = document.getElementById("btnPassword");

      btnPassword.addEventListener("click", () => {
        if (password.type === "password") {
          password.type = "text";
          btnPassword.innerHTML = "<i class='far fa-eye text-sm cursor-pointer'></i>";
        } else {
          password.type = "password";
          btnPassword.innerHTML = "<i class='text-sm far fa-eye-slash cursor-pointer'></i>";
        }
      });
    </script>
  </body>
</html>

