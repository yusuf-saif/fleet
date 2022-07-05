
       
<style>
.footer1 {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #2c71da;
  color: white;
  text-align: center;
  font-size: 10px;

}
</style>
        <footer>
            <div class="footer1">
                <p style="color:white"> <b>version 1.0 Developed by KSL</b></p>
            </div>
        </footer>
        
    </div>
    
    
    <script src="../assets/js/vendor/jquery.min.js"></script>  
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script>
        $(function() {

    setInterval( function() {
        var seconds = new Date().getSeconds();
        var sdegree = seconds * 6;
        var srotate = "rotate(" + sdegree + "deg)";

        $("#sec").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});

    }, 1000 );


    setInterval( function() {
        var hours = new Date().getHours();
        var mins = new Date().getMinutes();
        var hdegree = hours * 30 + (mins / 2);
        var hrotate = "rotate(" + hdegree + "deg)";

        $("#hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});

    }, 1000 );


    setInterval( function() {
        var mins = new Date().getMinutes();
        var mdegree = mins * 6;
        var mrotate = "rotate(" + mdegree + "deg)";

        $("#min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});

    }, 1000 );

});
    </script>   
</body>

</html>