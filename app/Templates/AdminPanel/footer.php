
	</div>
</div>

<?php
if(isset($data['ownjs'])){
	foreach($data['ownjs'] as $ownjs){
		echo $ownjs;
	}
}
Assets::js([
	'https://code.jquery.com/jquery-1.12.1.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
		'https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js',
		Url::templatePath('AdminPanel').'js/lumino.glyphs.js',
		Url::templatePath('AdminPanel').'js/chart.min.js',
]);
echo $js; //place to pass data / plugable hook zone
echo $footer; //place to pass data / plugable hook zone
?>

</body>
</html>
