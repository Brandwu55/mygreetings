<?php
namespace Src;

class MyGreeter
{
    // 定义时区
    private \DateTimeZone $timezone;

    // 构造函数，接受一个时区字符串作为参数
    public function __construct($timezone = 'UTC')
    {
        $this->timezone = new \DateTimeZone($timezone);
    }

    /**
     * 获取当前时间的方法，可以在测试中覆盖
     * @return \DateTime 当前时间
     * @throws \Exception
     */
    protected function getCurrentTime(): \DateTime
    {
        return new \DateTime('now', $this->timezone);
    }

    /**
     * 根据当前时间返回不同的问候语
     * @return string 问候语
     * @throws \Exception
     */
    public function greeting(): string
    {
        //获取当前时间
        $currentTime = $this->getCurrentTime();

        $currentHour = $currentTime->format('G');
        if ($currentHour>=6 && $currentHour <12) {
            //时间在6AM至12AM之间时，返回 "Good morning"
            return 'Good morning';
        } elseif ($currentHour >=12 && $currentHour < 18) {
            //时间在12AM至6PM之间时，返回 "Good afternoon"
            return 'Good afternoon';
        } else {
            //时间在6PM至第二天6AM之间时，返回 "Good evening"
            return 'Good evening';
        }
    }
}

//$str = new MyGreeter('Asia/Shanghai');
//try {
//    var_dump($str->greeting());
//} catch (\Exception $e) {
//    var_dump($e->getMessage());
//}
