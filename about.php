<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sobre mi</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/core/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/core/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include __DIR__ . "/layouts/sidebar.php" ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column m-0 p-0">

            <!-- Main Content -->
            <div id="content">

                <?php include __DIR__ . "/layouts/topbar.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid p-3">
                    <!-- Page Heading -->
                    <div class="col-12 p-0 m-0">
                        <div class="d-flex p-0 m-0 justify-content-between flex-lg-row flex-column-reverse">
                            <div class="col-12 mb-4 col-lg-8">
                                <div class="row p-0 m-0 d-flex justify-content-between mb-4">
                                    <h4 class="text-gray-900 font-weight-bold m-0">
                                        Información
                                    </h4>
                                    <div>
                                        <a href="https://dev.creativolab.com.mx" target="_blank" class="link">
                                            <?php echo $data['user']->getSubdomain();?>
                                        </a>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark font-weight-bold">
                                            Cuenta
                                        </h5>
                                        <p class="card-text font-weight-light">

                                        </p>
                                        <div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="profession"> Profesión </label>
                                                    <input class="form-control" type="text"
                                                           id="profession"
                                                           readonly value="<?php echo $data['profession']->getProfession();?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="subdominio"> Subdominio </label>
                                                    <input class="form-control" type="text"
                                                           id="subdominio"
                                                           readonly value="<?php echo $data['user']->getSubdomain();?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <dic class="row mb-4">
                                    <div class="col-12">
                                        <div class="card mb-4">
                                            <div class="card-body mb-0">
                                                <h5 class="card-title text-dark font-weight-bold">
                                                    Sobre mi
                                                </h5>
                                                <p class="card-text font-weight-light">
                                                    Aquí puedes agregar las categorías de tus habilidades; por ejemplo, web, moóvil, etc..
                                                </p>
                                                <div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label> Primer nombre </label>
                                                            <input class="form-control" type="text"
                                                                   readonly value="<?php echo $data['user']->getFirstName();?>">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> Segundo nombre </label>
                                                            <input class="form-control" type="text"
                                                                   readonly value="<?php echo $data['user']->getMiddleName();?>">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label> Apellido paterno </label>
                                                            <input class="form-control""
                                                                   readonly value="<?php echo $data['user']->getFirstLastname();?>">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Apellido materno</label>
                                                            <input class="form-control" type="text"
                                                                   readonly value="<?php echo $data['user']->getSecondLastname();?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="about-me-form-birth-date">
                                                                Fecha de nacimiento
                                                            </label>
                                                            <input type="date" id="about-me-form-birth-date"
                                                                   name="birth-date"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="add-skill-form-progress"> Número telefónico </label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend rounded">
                                                                    <div class="input-group-text">
                                                                        (+<?php echo $data['user']->getCode();?>)
                                                                    </div>
                                                                </div>
                                                                <input type="text"
                                                                       name="phone"
                                                                       class="form-control"
                                                                       id="about-me-form-phone-number"
                                                                       Value=" <?php echo $data['user']->getPhoneNumber();?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">
                                                            Resumen
                                                        </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        <small id="emailHelp" class="form-text text-muted">
                                                            Characters limit 300
                                                        </small>
                                                    </div>
                                                    <button type="submit" 
                                                            class="btn btn-primary font-weight-bold">
                                                        Guardar
                                                    </button>
                                                </form>
                                            </div>
                                            
                                        </div>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <h5 class="card-title text-dark font-weight-bold">
                                                    Redes sociales
                                                </h5>
                                                <p class="card-text font-weight-light">
                                                    En esta sección puede añadir tus usuarios de las siguientes redes sociales:
                                                </p>
                                                <form id="social-networking-form" class="mt-2">
                                                    <div class="form-row">
                                                        <div class="form-group col-12">
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend rounded">
                                                                    <div class="input-group-text text-primary font-weight-bold fade-in">
                                                                        Facebook
                                                                    </div>
                                                                </div>
                                                                <input type="text"
                                                                       name="link"
                                                                       class="form-control"
                                                                       id="social-networking-form-link"
                                                                       placeholder="https://www.facebook.com/usuario">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-12">
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend rounded">
                                                                    <div class="input-group-text text-info font-weight-bold fade-in">
                                                                        Twitter
                                                                    </div>
                                                                </div>
                                                                <input type="text"
                                                                       name="link"
                                                                       class="form-control"
                                                                       id="social-networking-form-link"
                                                                       placeholder="https://www.twitter.com/usuario">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-12">
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend rounded">
                                                                    <div class="input-group-text text-primary font-weight-bold fade-in">
                                                                        Linkedin
                                                                    </div>
                                                                </div>
                                                                <input type="text"
                                                                       name="linkedin"
                                                                       class="form-control"
                                                                       id="social-networking-form-linkedin"
                                                                       placeholder="https://www.linkedin.com/usuario">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <button
                                                    type="submit"
                                                            class="btn btn-primary font-weight-bold"
                                                            id="social-networking-form-submit">   
                                                        Guardar
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </dic>
                            </div>
                            <div class="col-12 mb-5 col-lg-4">
                                <div class="card m-0 shadow-sm p-0">
                                    <div class="card-body">
                                        <p class="p-0 mt-2 text-gray-500 font-weight-bold h5">
                                            Plantilla
                                        </p>
                                        <div class="p-0 d-flex justify-content-start align-items-center mt-3">
                                            <p class="p-0 m-0 h2 text-gray-900 font-weight-bolder align-self-end">
                                                $49
                                            </p>
                                            <span class="align-self-end text-gray-00 mx-1">
                                            /anual
                                        </span>
                                        </div>
                                        <div class="p-0 mt-3 mb-1 d-flex align-items-center">
                                            <div class="p-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#0275d8" style="height: 20px; width: 20px;">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="col-fill p-0 mx-1">
                                            <span class="p-0 m-0 font-weight-light text-gray-600">
                                                Plantilla
                                            </span>
                                            </div>
                                        </div>
                                        <div class="p-0 mt-1 mb-3 d-flex align-items-center">
                                            <div class="p-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#0275d8" style="height: 20px; width: 20px;">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="col-fill p-0 mx-1">
                                            <span class="p-0 m-0 font-weight-light text-gray-600">
                                                Subdominio
                                            </span>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary font-weight-bold btn-block mt-3">
                                            Comprar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

  
<!-- SweetAlert2 -->
<script src="/assets/core/sweetalert2/sweetalert2.js"> </script>
<!-- Form Submit -->
    <?php include __DIR__ . "/layouts/footer.php" ?>
 <script>
    const BASE_URL = "http://localhost";
    
    

// POST
$("#social-networking-form-submit").submit(function(event) {
    event.preventDefault();

    $(".form-control").removeClass("is-invalid");
    $(".invalid-feedback").remove();

    var social ={
        social: $("#social-networking-form-submit").val()
    }

    $.ajax({
        type: "POST",
        url: BASE_URL + " /api/v1/account/settings/social-networking",
        data: social,
        dataType: "json",
        encode: true,
    }).done(function (data) {
        console.log(data);
        if (!data.success) {
            
            if (data.errors.social) {
                $("#social-networking-form-submit").toggleClass("is-invalid");
                $("#social-networking-form").append( `<div class='invalid-feedback'> ${data.errors.social} </div>`);
            }
            if (data.errors.message) {
                Swal.fire({
                    icon: 'error',
                    title: 'Url no añadido!',
                    text: data.errors.message
                });
            }
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Url añadida!',
                text: data.message
            }).then((result) => {
                $("#social-networking-form-submit").val("");
                
            });
        }
    }).fail(function () {
        Swal.fire({
            icon: 'error',
            title: 'Whoops!',
            text: "Algo salió mal al establecer la conexión con el servidor"
        });
    });

});
        
        
        
        </script>
</body>

</html>