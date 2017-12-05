</main>
<footer>
	<div class="container">
		<p>Auteur : <a href="https://www.remy-coussy.fr" rel="author">Rémy Coussy</a></p>
	</div>
</footer>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		/*Initialisation*/
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
			var orderClic = [];
			var order = [];
			$('#faq > dt').each(function(){
				orderDt.push($(this));
				orderClic.push($(this).data('clic').value);
			});
			for ( i = 0; i < $('#faq > dt').length-1; i++) {
				order[orderClic[i]] = orderDt[i];
			}
			orderDt.sort();
			//console.log(orderDt,orderClic);
			//console.log(orderClic.ass)
			console.log(order);

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
	})
</script>
</html>