# Wekada Analytics Dashboard

A comprehensive analytics dashboard for delivery/logistics platforms built with CodeIgniter 4, featuring real-time data visualization, user management, and business intelligence tools.

## 🚀 Features

### 📊 Dashboard Overview
- **Real-time KPIs**: Orders, revenue, active users, and riders
- **Interactive Charts**: Revenue trends and order status distribution
- **Live Updates**: Real-time data refresh every 30 seconds
- **Performance Metrics**: Delivery times, completion rates, and more

### 📦 Orders Management
- **Order Tracking**: Complete order lifecycle management
- **Status Updates**: Real-time status changes with notifications
- **Rider Assignment**: Manual and automatic rider assignment
- **Filtering & Search**: Advanced filtering by date, status, location
- **Export Functionality**: CSV export for order reports

### 👥 User Analytics
- **User Behavior**: Registration trends, activity patterns
- **Retention Analysis**: User retention rates and engagement metrics
- **Spending Patterns**: Average order values and total spending
- **Geographic Distribution**: User activity by location

### 🏍️ Rider Analytics
- **Performance Tracking**: Delivery completion rates and earnings
- **Real-time Status**: Online/offline status and location tracking
- **Rating System**: Rider ratings and feedback management
- **Earnings Analysis**: Revenue per rider and performance metrics

### 💰 Revenue & Payments
- **Financial Dashboard**: Revenue trends and commission tracking
- **Payment Methods**: Breakdown by payment type
- **Commission Management**: City-based commission rates
- **Refund Tracking**: Refund processing and analytics

### 🗺️ Geospatial Insights
- **Real-time Map**: Live rider and order locations
- **Heat Maps**: Order density visualization
- **Location Analytics**: High-demand areas and cancellation hotspots

### ⚡ Service Performance
- **Delivery Metrics**: Average pickup and delivery times
- **Quality Assurance**: Order completion and cancellation rates
- **Performance Trends**: Historical performance data

### 💬 Feedback & Ratings
- **User Feedback**: Customer satisfaction tracking
- **Rating Analytics**: Average ratings and distribution
- **Issue Management**: Flagged users and riders

### ⚙️ Settings & Configuration
- **Platform Settings**: General configuration management
- **Commission Rates**: City-based commission structure
- **Pricing Algorithm**: Dynamic pricing configuration
- **Notification Settings**: Email, SMS, and push notifications

### 📈 Custom Reports
- **Report Generation**: Multiple report types (Orders, Riders, Revenue, Users)
- **Export Options**: CSV and JSON formats
- **Date Range Selection**: Flexible time period filtering
- **Automated Reports**: Scheduled report generation

## 🛠️ Technology Stack

- **Backend**: CodeIgniter 4 (PHP 8.1+)
- **Frontend**: Raw JavaScript, HTML5, CSS3
- **Styling**: Tailwind CSS
- **Charts**: Chart.js
- **Icons**: Font Awesome
- **Database**: MySQL/PostgreSQL (configurable)

## 📋 Requirements

- PHP 8.1 or higher
- MySQL 5.7+ or PostgreSQL 10+
- Composer
- Web server (Apache/Nginx)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd wekada-dashboard
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   # Edit .env file with your database and application settings
   ```

4. **Set up database**
   ```bash
   # Create database and run migrations
   php spark migrate
   ```

5. **Configure web server**
   - Point document root to `public/` directory
   - Ensure `writable/` directory is writable

6. **Access the dashboard**
   - Navigate to your domain in a web browser
   - Default admin credentials: admin/admin (change after first login)

## 📁 Project Structure

```
wekada-dashboard/
├── app/
│   ├── Config/           # Configuration files
│   ├── Controllers/      # Application controllers
│   ├── Models/          # Database models
│   ├── Views/           # View templates
│   │   ├── templates/   # Header, footer, layouts
│   │   ├── dashboard/   # Dashboard views
│   │   ├── orders/      # Order management views
│   │   ├── users/       # User analytics views
│   │   ├── riders/      # Rider management views
│   │   ├── revenue/     # Revenue analytics views
│   │   ├── geospatial/  # Map and location views
│   │   ├── performance/ # Performance metrics views
│   │   ├── feedback/    # Feedback and ratings views
│   │   ├── settings/    # Configuration views
│   │   └── reports/     # Report generation views
│   └── Libraries/       # Custom libraries
├── public/              # Web root directory
├── system/              # CodeIgniter system files
├── writable/            # Logs, cache, uploads
└── vendor/              # Composer dependencies
```

## 🎯 Key Features Implementation

### Real-time Data Updates
- AJAX-powered real-time updates every 30 seconds
- WebSocket support for instant notifications
- Live order tracking and status updates

### Responsive Design
- Mobile-first responsive design
- Touch-friendly interface
- Cross-browser compatibility

### Security Features
- CSRF protection
- Input validation and sanitization
- Role-based access control
- Secure API endpoints

### Performance Optimization
- Database query optimization
- Caching strategies
- Asset minification
- Lazy loading for large datasets

## 📊 Dashboard Sections

### 1. Dashboard Overview
- Key performance indicators
- Revenue charts and trends
- Recent orders and activities
- Top performing riders

### 2. Orders Management
- Order listing with filters
- Status management
- Rider assignment
- Export functionality

### 3. User Analytics
- User registration trends
- Activity patterns
- Retention analysis
- Geographic distribution

### 4. Rider Analytics
- Performance metrics
- Earnings analysis
- Rating management
- Status tracking

### 5. Revenue & Payments
- Financial dashboard
- Commission tracking
- Payment method analysis
- Refund management

### 6. Geospatial Insights
- Real-time map view
- Order density heatmaps
- Location analytics

### 7. Service Performance
- Delivery time metrics
- Quality indicators
- Performance trends

### 8. Feedback & Ratings
- Customer feedback
- Rating analytics
- Issue management

### 9. Settings & Configuration
- Platform settings
- Commission rates
- Pricing algorithms
- Notification preferences

### 10. Custom Reports
- Multiple report types
- Export options
- Scheduled reports

## 🔧 Configuration

### Database Configuration
Edit `app/Config/Database.php` to configure your database connection:

```php
public $default = [
    'DSN'      => '',
    'hostname' => 'localhost',
    'username' => 'your_username',
    'password' => 'your_password',
    'database' => 'wekada_dashboard',
    'DBDriver' => 'MySQLi',
    'DBPrefix' => '',
    'pConnect' => false,
    'DBDebug'  => (ENVIRONMENT !== 'production'),
    'charset'  => 'utf8',
    'DBCollate' => 'utf8_general_ci',
    'swapPre'  => '',
    'encrypt'  => false,
    'compress' => false,
    'strictOn' => false,
    'failover' => [],
    'port'     => 3306,
];
```

### Application Settings
Configure application settings in `app/Config/App.php`:

```php
public $appTimezone = 'America/New_York';
public $charset = 'UTF-8';
public $forceGlobalSecureRequests = false;
```

## 🚀 Deployment

### Production Deployment
1. Set environment to production in `.env`
2. Configure web server (Apache/Nginx)
3. Set up SSL certificate
4. Configure database backups
5. Set up monitoring and logging

### Docker Deployment
```bash
# Build and run with Docker
docker-compose up -d
```

## 📈 Monitoring & Analytics

### Built-in Analytics
- Real-time performance metrics
- User behavior tracking
- System health monitoring
- Error logging and reporting

### Integration Options
- Google Analytics
- Mixpanel
- Hotjar
- Custom analytics platforms

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 🆘 Support

For support and questions:
- Create an issue on GitHub
- Contact: support@wekada.com
- Documentation: [docs.wekada.com](https://docs.wekada.com)

## 🔄 Updates & Maintenance

### Regular Updates
- Security patches
- Feature updates
- Performance improvements
- Bug fixes

### Maintenance Schedule
- Daily: Automated backups
- Weekly: Performance monitoring
- Monthly: Security audits
- Quarterly: Feature updates

---

**Built with ❤️ for modern delivery platforms** 