<?php



?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <style type="text/css">
      body {
          background: #f1f1f1;
        }
    </style>
  </head>
  <body>
    <div class="container mt-5 mb-2 mx-auto" style="max-width: 700px;">
      <div class="min-vh-100">

            <!-- contact form -->
            <div class="card">
                <div class="card-body">

                    <h5 class="text-center pb-2">Contact Us</h5>

                     <!-- Instruction: Put error message or success message here -->
                     <!-- error -->
                    <?php 
                        if ( isset( $_SESSION['error'] ) ) : ?>
                        <div class="alert alert-danger" role="alert">
                    <?php
                        echo $_SESSION['error'];

                        unset( $_SESSION['error'] );
                    ?>
                        </div>
                     <?php endif; ?>
                    <!-- success -->
                     <?php 
                        if ( isset( $_SESSION['success'] ) ) : ?>
                        <div class="alert alert-success" role="alert">
                    <?php
                        echo $_SESSION['success'];

                        unset( $_SESSION['success'] );
                    ?>
                        </div>
                     <?php endif; ?>

                    <form
                        action="process_contact_form.php"
                        method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Enter your name"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea
                                class="form-control"
                                id="message"
                                name="message"
                                rows="3"
                                placeholder="Enter your message"
                            ></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                Send
                            </button>
                        </div>
                    </form>

                </div>
            </div>

      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    ></script>
  </body>
</html>