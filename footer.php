</main>
<footer>
	<div class="container">
		<a href="https://www.remy-coussy.fr" class="btn" rel="author">Rémy Coussy</a>
	</div>
</footer>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		/*Initialisation*/

		$( window ).on('beforeunload', function() {
			$('main').addClass("animate-out");
			$('.loader').css('opacity','1');	
		});

		$('dt').each(function(){
			$(this).data( "clic", { value:0 });
		});
		/*Fonctions*/
		function hideAside(){
			$('aside').hide(2000);
		}
		function fadeImg(){
			$('img').fadeOut(2000);
		}
		function toggleMenu(){
			$('nav').slideToggle(500);
		}
		function orderQuestion(){
			var orderDt = [];
			$('#faq > dt').each(function(){
				orderDt.push({element:$(this),clic:$(this).data('clic').value});
				// .reussir a prendre les .next() pour l'affichage.
			});
			var sorted = orderDt.sort(function(a, b) {
  				return a.clic - b.clic;
			}).reverse();
			console.log(sorted);
			console.log(sorted[1]['element'].html());
			 $('#faq').html('');
			for (var i = 0; i < sorted.length -1; i++) {
			 	$('#faq').append(sorted[i]['element']);
			 }

		}
		/*Actions*/
		$('#hideAside').on('click',function(){
			hideAside();
		});
		$('#fadeImg').on('click',function(){
			fadeImg();
		});
		$('#toggleMenu').on('click',function(){
			toggleMenu();
		});		
		$('dt').on('mouseenter',function() {
			$(this).next().show(400);
		});
		$('dt').on('mouseleave',function() {
			$(this).next().hide(400);
		});
		$('dt').on('click',function() {
			$(this).next().slideToggle();
			$(this).off("mouseleave");
			$(this).data('clic').value += 1;
			//console.log('clic sur cet élément : '+$(this).data('clic').value);
			orderQuestion();
		});
		$('.dropdown').on('click',function(){
			$(this).children('ul').slideToggle();
		});
		$('.charger').on('click',function(){
			$('.get-faq').load('/FAQ.php #faq');
		})
	})
</script>
</html>