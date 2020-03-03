/*
 * OneCore-Javascript新建URL
 * @param integer 		  url_type URL类型，对应配置文件中的设置
 * @param string or array controller 控制器名称，如果有module,使用数组new Array(module名, controller名)
 * @param string 		  action 动作名称
 * @param array			  param 
 */
function ocUrl(url_type, controller, action, param){
	var m = c = false;
	var type = typeof controller;

	if(type == 'object') {
		m = controller[0];
		c = controller[1];
	} else if(type == 'string') {
		c = controller;
	}

	if(url_type == 2 || url_type == 3){
		var mstr = m ? m + '/' : '';
		var str = url_type == '3' ? 'index.php/' : '';
		url = '/' + str + mstr + c + '/' + action;
	} else {
		var mstr = m ? "m=" + m + "&" : '';
		url = "/index.php?_route" + mstr + "/" + c +　"/" + action;
	}

	if(typeof param == 'object') {
		for(key in param) {
			var val = param[key];
			url = addQuery(url_type, key, val, url);
		}
	}

	return url;
}