<?php
echo "<script>
window.l = [];
l.push('test_1');
l.push('test_2');
console.log(l);
for (var i = 0; i < l.length; i++) {
	console.log(l[i]);
};
</script>";



echo "<script>
for (var i = 0; i < l.length; i++) {
	console.log(l[i]);
};
</script>";

echo "</br> test";
?>