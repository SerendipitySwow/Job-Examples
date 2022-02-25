# 启动Server
```bash
vendor/bin/job swow-cloud-job:start
```
# 启动调试服务
```bash
php vendor/chevere/xr/server.php -p 27420
```
# 启动任务消费者 端口9764 其他端口类似
```bash
vendor/bin/job job:start --host=127.0.0.1 --port=9764
```
# 具体接口和使用详情见swow-cloud/job 文档
