# Rhapsody User Bundle

## Installation

Install with composer

    composer req phpguild/rhapsody-security-bundle
    
Execute install script

    vendor/bin/rhapsody-user install

Edit `config/packages/security.yaml`
    
    security:
        encoders:
            App\Entity\AdminUser:
                algorithm: bcrypt
        providers:
            admin:
                entity:
                    class: App\Entity\AdminUser
                    property: email
        role_hierarchy:
            ROLE_ADMIN: ~
        firewalls:
            dev:
                pattern: ^/(_(profiler|wdt)|css|images|js)/
                security: false
            admin:
                context: admin
                pattern: /admin/.*
                provider: admin
                anonymous: true
                form_login:
                    login_path: admin_auth_login
                    check_path: admin_auth_login_check
                    failure_path: admin_auth_login
                    default_target_path: admin_dashboard
                    use_forward: false
                    use_referer: false
                remember_me:
                    secret: '%kernel.secret%'
                    path: /admin/
                    name: ADMIN_REMEMBER_ME
                    lifetime: 31536000
                    remember_me_parameter: _remember_me
                logout:
                    path: admin_auth_logout
                    target: admin_auth_login
                    invalidate_session: false
    
        access_control:
            - { path: ^/admin/auth, roles: IS_AUTHENTICATED_ANONYMOUSLY }
            - { path: ^/admin, roles: ROLE_ADMIN }
