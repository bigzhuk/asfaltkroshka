<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>
	
</body>
</html>
<script>
	var products = $.parseJSON('{"1":{"id":"1","name":"\u041e\u041e\u041e \u00ab\u0410\u043b\u044c\u0431\u0430\u0442\u0440\u043e\u0441\u00bb","inn":"321654987","manager":"\u0418\u0432\u0430\u043d\u043e\u0432 \u0418\u0432\u0430\u043d \u0418\u0432\u0430\u043d\u044b\u0447","phone":"89261234567","email":"ivanov@albatros.ru"},"2":{"id":"2","name":"\u041e\u0410\u041e \u00ab\u0420\u043e\u0433\u0430 \u0438 \u043a\u043e\u043f\u044b\u0442\u0430\u00bb","inn":"654987321","manager":"\u041a\u043e\u0431\u044b\u043b\u0438\u043d \u0421\u0442\u0435\u043f\u0430\u043d \u0411\u0435\u0434\u0440\u043e\u0441\u043e\u0432\u0438\u0447","phone":"89266545212","email":"ko.bed@roga.ru"}} ');
//     "uid": "9dbbaa70-d91b-11e4-a6fe-005056bd0a2e",
//     "article": "KIT RU0059",
//     "fullname": "KIT RU0059 \u041f\u043e\u0436\u0430\u0440\u043d\u0430\u044f GSM-\u0441\u0438\u0433\u043d\u0430\u043b\u0438\u0437\u0430\u0446\u0438\u044f (\u0418\u041f 212-63\u0410-GSM)",
//     "name": "\u0418\u041f 212-63\u0410-GSM",
//     "group_name": "\u041f\u043e\u0436\u0430\u0440\u043d\u0430\u044f GSM-\u0441\u0438\u0433\u043d\u0430\u043b\u0438\u0437\u0430\u0446\u0438\u044f",
//     "segment": "\u0411\u0435\u0437\u043e\u043f\u0430\u0441\u043d\u043e\u0441\u0442\u044c",
//     "barcode": "",
//     "manager": "\u041a\u0438\u0441\u0435\u043b\u0435\u0432 \u0414\u043c\u0438\u0442\u0440\u0438\u0439 \u0411\u043e\u0440\u0438\u0441\u043e\u0432\u0438\u0447",
//     "manager_uid": "1a462d04-ba69-11e3-9b71-005056bd0a2e",
//     "manufacturer": "\u0421\u0438\u0431\u0438\u0440\u0441\u043a\u0438\u0439 \u0430\u0440\u0441\u0435\u043d\u0430\u043b",
//     "country": "\u0420\u041e\u0421\u0421\u0418\u042f",
//     "usefulness": "[\"\\u041e\\u043f\\u043e\\u0432\\u0435\\u0441\\u0442\\u0438\\u0442 \\u043e \\u0437\\u0430\\u0434\\u044b\\u043c\\u043b\\u0435\\u043d\\u0438\\u0438 \\u0437\\u0432\\u043e\\u043d\\u043a\\u043e\\u043c \\u0438 \\u043f\\u043e SMS\",\"\\u041f\\u043e\\u0437\\u0432\\u043e\\u043b\\u0438\\u0442 \\u0441\\u0432\\u043e\\u0435\\u0432\\u0440\\u0435\\u043c\\u0435\\u043d\\u043d\\u043e \\u0441\\u0440\\u0435\\u0430\\u0433\\u0438\\u0440\\u043e\\u0432\\u0430\\u0442\\u044c \\u043d\\u0430 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0435 \\u043f\\u0440\\u0438\\u0437\\u043d\\u0430\\u043a\\u0438 \\u043f\\u043e\\u0436\\u0430\\u0440\\u0430\"]",
//     "slogan": "\u0423\u0437\u043d\u0430\u0439\u0442\u0435 \u043e \u0437\u0430\u0434\u044b\u043c\u043b\u0435\u043d\u0438\u0438 \u043c\u0433\u043d\u043e\u0432\u0435\u043d\u043d\u043e!",
//     "status": "\u041d\u043e\u0432\u0438\u043d\u043a\u0430",
//     "description": "\u0410\u0432\u0442\u043e\u043d\u043e\u043c\u043d\u044b\u0439 \u043f\u043e\u0436\u0430\u0440\u043d\u044b\u0439 \u0441\u0438\u0433\u043d\u0430\u043b\u0438\u0437\u0430\u0442\u043e\u0440. \u0420\u0435\u0430\u0433\u0438\u0440\u0443\u0435\u0442 \u043d\u0430 \u0434\u044b\u043c, \u043e\u043f\u043e\u0432\u0435\u0449\u0430\u0435\u0442 \u043e \u043f\u043e\u0436\u0430\u0440\u0435. \u041e\u043f\u043e\u0432\u0435\u0441\u0442\u0438\u0442 \u0434\u043e\u0437\u0432\u043e\u043d\u043e\u043c \u0438\u043b\u0438 SMS \u043d\u0430 \u043c\u043e\u0431\u0438\u043b\u044c\u043d\u044b\u0439 \u0442\u0435\u043b\u0435\u0444\u043e\u043d. \u041d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0430 \u0441 \u043f\u0440\u0438\u043b\u043e\u0436\u0435\u043d\u0438\u044f \u0438\u043b\u0438 \u043f\u043e SMS. \u0421\u0434\u0435\u043b\u0430\u043d\u043e \u0432 \u0420\u043e\u0441\u0441\u0438\u0438.",
//     "description_omr": "",
//     "omr_add_1": "[\"\"]",
//     "omr_add_2": "[\"\"]",
//     "omr_add_3": "[\"\"]",
//     "rrp": "3950",
//     "price_p0": "3290",
//     "price_p1": "3040",
//     "price_p2": "2890",
//     "price_p3": "2890",
//     "price_p4": "2890",
//     "axecode": "",
//     "stock": "4",
//     "balls": "0",
//     "img_1": "24M5HJETFm.jpg",
//     "img_2": "WRbEZUxiMP.jpg",
//     "img_3": "WDEqGygDew.jpg",
//     "img_4": "ODlNO7xjod.jpg",
//     "img_5": "BxQJEj5cdo.jpg",
//     "img_6": ""
// }');
</script>

