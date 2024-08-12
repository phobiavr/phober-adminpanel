## Adminpanel

The `adminpanel` service within the <b>Phober</b> project is crucial for managing administrative tasks, user interfaces, and updating various databases and configurations. It interacts with the following databases:

- **`phober_adminpanel`**: Stores administrative data related to the admin panel interface.
- **`phober_auth`**: Manages authentication and authorization data.
- **`phober_device`**: Stores data related to device/game management.
- **`phober_media`**: Handles media files and storage for the application.
- **`phober_crm`**: Manages CRM customer data.
- **`phober_staff`**: Stores game/session/invoice data related to staff or user accounts.
- **`phober_notification`**: Manages notification data for the application.
- **`phober_config`**: Stores configuration data, managed by `config-server`
- **`phober_shared`**: Stores logs and diagnostic information for the application.

### Responsibilities:
- Manages administrative tasks, user interfaces, and updates databases and configurations.
- Updates configurations within `config-server`.
- Manages credentials required by `notification-server`.

### Dependencies:
- Relies on the `db` service for database operations.

### Framework and Initialization / Additional Requirements:
- Built using the Laravel framework.
- Requires PHP dependencies installed via Composer.
- Requires seeding the database with initial data.
- Utilizes an `auth.json` file for downloading dependencies such as `laravel/nova`.


