<div class="footer_part2">
    <h3>Rate</h3>
    <div align="center" style="padding: 50px;color:grey;">
        <i class="fa fa-star fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i>
    </div>
    <form action="includes\saveRate.php" id="rate">
        <input type="submit" value="Rate Us">
    </form>
</div>

<script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

<script>
        var ratedIndex = 0, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex+1);
               rate();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'gold');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }

        document.getElementById("rate").onsubmit  = function(){
            event.preventDefault();
			var pass = true;
                    if (check == 0){      
                        pass = false;
				        alert("Please login to give a rate.");
				        return false;
                
                    }
                    if ( pass == true ){
                        var rate = localStorage.getItem('ratedIndex');
                        //console.log(rate);
                        var d = new Date();
                        d.setTime(d.getTime() + (1*24*60*60*1000));
                        var expires = "expires="+ d.toUTCString();
                        document.cookie = 'rate' + "=" + rate + ";" + expires + ";path=/";
                        this.submit();
                    }
        }  
</script>