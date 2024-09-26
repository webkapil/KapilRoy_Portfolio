<!-- Contact -->
<section class="Contact text-center" id="Contact">
    <div class="container">
        <h5>Contact</h5>
        <h1>I'd Love To Hear From You.</h1>
        <form action="send_email.php" method="POST">
    <input type="text" class="form-control" name="name" placeholder="Name" required>
    <input type="email" class="form-control" name="email" placeholder="Email" required>
    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
    <textarea name="message" placeholder="Message" class="form-control" required></textarea>
    <button type="submit">Submit</button>
</form>

        <div class="row mt-5">
            <div class="col-md-4">
                <i class="bi bi-geo-alt"></i>
                <h6>Where am I located</h6>
                <p>Plot no- 151 Derabassi 140201,<br>Punjab India</p>
            </div>

            <div class="col-md-4">
                <i class="bi bi-envelope-fill"></i>
                <h6>Email Me At</h6>
                <p>kapilroy6000@gmail.com</p>
                <p>kapilroy6611@gmail.com</p>
            </div>

            <div class="col-md-4">
                <i class="bi bi-telephone-fill"></i>
                <h6>Call Me At</h6>
                <p>Phone: +91-9888658538</p>
                <p>WhatsApp: +91-9888658538</p>
            </div>

        </div>

        <ul class="so">
            <li><a href="mailto:kapilroy6000@gmail.com"><i class="bi bi-envelope-fill"></i></a></li>
            <li><a href="https://wa.me/<9888658538>?text=<YourMessage>"><i class="bi bi-whatsapp"></i></a></li>
            <li><a href="https://www.linkedin.com/in/kapil-roy-b31791141/"><i class="bi bi-linkedin"></i></a></li>
        </ul>

    </div>
</section>



<!-- detecting -->
<div class="modal fade" id="exampleModaldetecting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered detecting">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body text-center">
                <img src="images/Connecting.png" alt="Connecting" />
                <h6 class="mt-2">Detecting card...</h6>
            </div>
        </div>
    </div>
</div>

<a class="arrow" href="#top"><i class="bi bi-arrow-up"></i></a>

<!--------------------  script -------------------->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

</body>
</html>
