<?php
# 设置cookie
setcookie('name','lcx',time()+60*60,'/');

//删除cookie，将cookie设置为空
setcookie('name','');