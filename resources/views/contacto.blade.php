@extends('layouts.sec')
@section('secundario')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">

            <header class="major special">
                <h2>CONTACTO</h2>
                <p>Datall.io </p>
            </header>


            <a href="#" class="image fit"><img src="images/correo.png" alt="" /></a>
            <form class="form-horizontal" id="contact_form">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Name</label>
                        <div class="col-md-5">
                            <input id="name" name="name" type="text" placeholder="Enter your full name here" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-5">
                            <input id="email" name="email" type="text" placeholder="Enter your email address here" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="msg">Message</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="msg" name="msg" cols="6" rows="6"></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </section>

    @endsection