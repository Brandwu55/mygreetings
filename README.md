# homework
动手
1. 已经实现
2. 如果要运⾏make dev-tests这个命令，recruit 这个容器⾥⾯需要装 make。
   ⽬前容器中没有装 make。 
   所以在 Dockerfile⾥添加： RUN apk update && apk add --no-cache make 
   必须 CD 到 项目/php/目录下执行：make dev-tests

思考
1. 是，单元测试类(MyGreeterTest)目前存在问题
2. 目前的方法名不是驼峰命名，需要改成驼峰命名方式。改成 testInit 和 testGreeting。

   $this->assertTrue( strlen($this->greeter->greeting()) > 0 );
   这个是根据返回值长度判断是否成功，判断不了返回的是哪个时间段的问候语。
   单元测试覆盖的测试太少了，⾄少需要覆盖返回 "Good morning"，"Good afternoon"，"Good evening"。