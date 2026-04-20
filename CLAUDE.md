# WPKirk-Routes-Boilerplate

Focused demo of the **menu routing + custom page routing** layer in WP Bones: admin menus
mapped to controllers via `config/menus.php`, standalone "custom page" routes via
`config/routes.php`, named routes resolved with `$plugin->getMenuUrl()` / `$plugin->getPageUrl()`.
This is the WP Bones take on Laravel-style URL generation for WordPress.

## What this demos

Five admin menu items dispatched to different controllers, plus a custom page route:

- `config/menus.php` — top-level menu `WP Kirk Routes` with 5 sub-items wiring different
  controllers (`MenuRouting\MenuRoutingController`, `AnotherController`).
- `config/routes.php` — a named `my_custom_page_route` mapped to
  `Routes\RoutesController@myRoute` for building links with `$plugin->getPageUrl()`.
- Named menu entry `second_view` demonstrates `$plugin->getMenuUrl('second_view')` for
  type-safe link generation elsewhere in the plugin.

**Key files to read first:**

| File | What to look at |
| --- | --- |
| `config/menus.php` | Full menu tree, named entry + inline entries side by side |
| `config/routes.php` | Custom page route definition |
| `plugin/Http/Controllers/MenuRouting/MenuRoutingController.php` | Multi-method controller dispatching `index`, `routes`, `second`, `pages` |
| `plugin/Http/Controllers/AnotherController.php` | Minimal controller to show direct namespace routing |
| `plugin/Http/Controllers/CustomPageController.php` | Referenced from `routes.php` |

## Smoke test (manual, ~30s)

With the plugin active:

1. Log in to `wp-admin` and confirm the **WP Kirk Routes** top-level menu is visible.
2. Click each of the 5 sub-items in turn:
   - **Menu Routing** → `MenuRoutingController@index`
   - **Routes** → `MenuRoutingController@routes`
   - **Second View** → `MenuRoutingController@second`
   - **Another Menu View** → `AnotherController@index`
   - **Pages Folder** → `MenuRoutingController@pages`

   Each should render its view without fatal/PHP errors.
3. On the "Routes" page, follow any generated link — it should resolve to the correct admin
   URL (confirms `$plugin->getMenuUrl()` / `$plugin->getPageUrl()` resolution).
4. `wp-content/debug.log` should stay clean.

## Use as a template

```sh
# 1. clone from the GitHub template
gh repo create my-routes-plugin --template wpbones/WPKirk-Routes-Boilerplate --public --clone
cd my-routes-plugin

# 2. rename the PHP namespace + plugin slug
composer install
php bones rename "My Routes Plugin"

# 3. build + activate
yarn install && yarn build
wp plugin activate my-routes-plugin
```

Edit `config/menus.php` for your admin menu tree, add controllers under `plugin/Http/Controllers/`.
Use `config/routes.php` for routes that don't live in the menu (public-facing custom pages,
thank-you pages, etc.). Resolve named URLs via `$plugin->getMenuUrl('key')` /
`$plugin->getPageUrl('key')` — never hard-code `admin.php?page=...`.

## Framework surface exercised

This boilerplate is the **regression bed** for URL generation and menu dispatching:

- `WPKirk\WPBones\Routing\AdminMenuProvider` reading `config/menus.php` and wiring handlers
- `WPKirk\WPBones\Routing\Pages\PageProvider` reading `config/routes.php`
- `Plugin::getMenuUrl()` / `Plugin::getPageUrl()` named-URL resolution
- Controller dispatch with nested namespace support (`MenuRouting\MenuRoutingController`)
- Multiple methods on the same controller via the `get => 'Controller@method'` config shape
