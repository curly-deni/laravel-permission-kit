# Laravel Permission Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/curly-deni/laravel-permission-kit.svg?style=flat-square)](https://packagist.org/packages/curly-deni/laravel-permission-kit)
[![Code Style](https://img.shields.io/github/actions/workflow/status/curly-deni/laravel-permission-kit/fix-php-code-style-issues.yml?branch=main\&label=code%20style\&style=flat-square)](https://github.com/curly-deni/laravel-permission-kit/actions?query=workflow%3A%22Fix+PHP+code+style+issues%22+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/curly-deni/laravel-permission-kit.svg?style=flat-square)](https://packagist.org/packages/curly-deni/laravel-permission-kit)

**A modular toolkit for fine-grained permission and policy management in Laravel apps** 🔐
This package is a convenient wrapper that unifies and integrates multiple smaller permission-related packages into a single cohesive kit.

---

## ✨ Features

* 📦 Combines multiple permission-related packages
* 🔧 Easy configuration publishing for all submodules
* 🛡️ Policy and gate control with traits
* 🔍 Model visibility via scopes
* ⚡ Fast setup, clean integration

---

## 📚 Included Packages

This kit brings together the following components:

* [`laravel-permission-controller`](https://github.com/curly-deni/laravel-permission-controller) – Observer and scope permission checks
* [`laravel-permission-maker`](https://github.com/curly-deni/laravel-permission-maker) – Permission/role scaffolding
* [`laravel-permission-model-attributes`](https://github.com/curly-deni/laravel-permission-model-attributes) – Permission attributes for Eloquent models
* [`laravel-permission-policy`](https://github.com/curly-deni/laravel-permission-policy) – Trait-based resource policy handling
* [`laravel-scopes`](https://github.com/curly-deni/laravel-scopes) – Reusable global scopes for visibility and ownership

---

## 📦 Installation

Install via Composer:

```bash
composer require curly-deni/laravel-permission-kit
```

Publish configuration files for each sub-package:

```bash
php artisan vendor:publish --tag="permission-controller-config"
php artisan vendor:publish --tag="permission-maker-config"
php artisan vendor:publish --tag="permission-model-attributes-config"
php artisan vendor:publish --tag="permission-policy-config"
php artisan vendor:publish --tag="scopes-config"
```

---

## 🚀 Usage

Refer to the individual packages for full usage documentation:

* [Permission Controller](https://github.com/curly-deni/laravel-permission-controller#readme)
* [Permission Maker](https://github.com/curly-deni/laravel-permission-maker#readme)
* [Permission Model Attributes](https://github.com/curly-deni/laravel-permission-model-attributes#readme)
* [Permission Policy](https://github.com/curly-deni/laravel-permission-policy#readme)
* [Scopes](https://github.com/curly-deni/laravel-scopes#readme)

---

## 🤝 Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for contribution guidelines.

---

## 🛡 Security

If you discover any security issues, please review our [security policy](../../security/policy).

---

## 🙌 Credits

* [Danila Mikhalev](https://github.com/curly-deni)
* [All Contributors](../../contributors)

---

## 📄 License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).
