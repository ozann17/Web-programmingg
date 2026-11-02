# NPD CLUB storefront preview

## Run it

Open `index.html` in a browser. The page has no build step or package installation. Product photos and the DM Sans font are loaded from external services, so those assets need an internet connection.

## Included in this preview

- Responsive NPD CLUB storefront with three collections and 18 sample products.
- Bottom-reachable menu with collection links, wishlist, cart, and account entry.
- Product detail view with image gallery, size/color availability, and stock labels.
- Device-local cart, wishlist, profile, sample stock, and order history.
- Checkout form, QRIS/virtual-account payment screens, 24-hour display timer, and a manual demo payment action.

The demo intentionally makes its local-only behavior visible in the account, checkout, and payment screens. It is a browser prototype, not a production e-commerce backend:

- Login is not real authentication. The entered password is not checked or stored, and the sample profile is saved in this browser only.
- Wishlist and orders use browser local storage, not a database; they do not sync across devices.
- QRIS/virtual-account details are illustrative. No Midtrans/Xendit request, valid payment code, webhook, or real payment is made.
- Inventory is sample client-side data. There is no cross-customer stock reservation or server-verified payment/cancellation/expiry handling.

For production use, replace the demo account, storage, inventory, and payment actions with a server-backed application, database, secure sessions, and a verified payment-gateway webhook. Never accept a browser-only payment result or inventory count as authoritative.
