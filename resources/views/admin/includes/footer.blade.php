<style>
    .copyright>span a {
        color: #858796;
    }

</style>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <a href="http://upton4ever.com.mx">upton4ever</a> <span id="año"></span></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<script>
    var currentTime = new Date();
    var year = currentTime.getFullYear()

    document.getElementById('año').innerHTML = year;
</script>
