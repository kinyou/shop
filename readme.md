## 优雅的开发过程

- 使用脚手架生成对应的测试用例文件
  php artisan make:test ProductsTest
- 生成对应的控制器
    php artisan make:controller ProductsController
- 生成对应的model和数据库迁移文件
    php artisan make:model Models/Product -m
- 生成数据库的工厂生成文件
    php artisan make:factory ProductFactory
- 创建种子文件生成测试数据
    php artisan make:seeder ProductTableSeeder
- 执行数据库迁移并且数据填充
    php artisan migrate &&  php artisan db:seed


