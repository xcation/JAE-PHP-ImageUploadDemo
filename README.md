#JAE-PHP ImageUpload应用

###创建应用目的：
此应用主要是为了向大家演示JAE-PHP应用中如何上传图片至图片空间

###应用适用范围：
此应用可以在某些业务类型的JAE-PHP应用的本地SDK或线上测试、正式环境运行；

目前适用的业务类型包括：微淘插件、微淘公共账号、特色中国等；

如果其它业务需要此功能，需要让业务方联系JAE团队进行开通。

###应用演示内容：
1、在JAE-PHP应用中如何获取上传的文件二进制流

2、在JAE-PHP应用中如何调用TOP接口进行文件发送

###注意事项：

1、注意修改appkey、secret、sessionkey为自己的appkey、secret、sessionkey；

2、注意setImg参数的书写方式；

3、注意form表单中有无enctype="multipart/form-data"属性；如无，则无法进行文件上传。
