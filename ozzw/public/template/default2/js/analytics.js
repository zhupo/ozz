var analytics_click_statistics;
(function(){
	var s=function(n, v){
		var d=new Date();
		d.setTime(new Date(d.toLocaleDateString()).getTime()+24*3600*1000-1);
		document.cookie=n+'='+escape(v)+';expires='+d.toGMTString();
	};
	var g=function(n){
		var r=new RegExp('(^| )'+n+'=([^;]*)(;|$)');
		var d=document.cookie.match(r);
		return d?unescape(d[2]):'';
	};
	var n=0;
	var d=g('a_s_id');
	if(d==''){
		d='cbp3tc23rhf2n2vbb43ppvi2a1';
		n=1;
	}
	s('a_s_id', d);
	var c=[];
	c.push('url='+encodeURIComponent(window.location.href));
	c.push('referrer='+encodeURIComponent(document.referrer));
	c.push('number=Iic2flRBCw==');
	c.push('new_visitors='+n);
	c.push('session_id='+d);
	$('body[id]').size() && c.push('page_par_id='+$('body').attr('id'));
	c.push('rand='+Math.random());
	(new Image).src='//analytics.ly200.com/analytics/?'+c.join('&');
	analytics_click_statistics=function(p){
		c.push('position='+p);
		c.push('click=1');
		$.ajax({
			url:'//analytics.ly200.com/analytics/?'+c.join('&'),
			async:true
		});
	};
})();