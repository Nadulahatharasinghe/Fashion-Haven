
# Fashion Haven

A modern, responsive online fashion store demo built with a clean architecture — perfect for learning e-commerce front-end + back-end integration or using as a starter template for projects and portfolios.

---

## 🚀 Project Overview
**Online Fashion Store** is a full-stack web application showcasing a fashion retail experience. It includes product browsing, category filters, product detail pages, shopping cart, checkout flow (mock), user authentication (optional), and an admin panel for managing products. Built with a focus on clean UI, responsive design, and extensible architecture.

---

## 🔧 Features
- Product listing with categories, sorting and search
- Product detail pages with image gallery and variants (size/color)
- Add to cart, update quantities, remove items
- Mock checkout flow (client-side or server-simulated)
- User signup/login (JWT/session-based stub optional)
- Admin dashboard to create/edit/delete products (sample UI + API)
- Responsive, mobile-first design
- Optional: sample seed data and simple file-based persistence (no heavy DB required for demo)
- Unit & integration test placeholders

---

## 🧩 Tech Stack (example)
**Frontend**
- HTML5, CSS3, JavaScript (ES6+)
- React + Vite / Next.js (choose one)
- Tailwind CSS / Bootstrap for styling
- React Router (if single-page app)
- Axios / Fetch for API calls
- MPAndroidChart — *not used here; frontend charts via Chart.js or Recharts*

**Backend**
- Node.js + Express.js (REST API)
- JSON file or lightweight storage (e.g., lowdb) for persistence (no heavy DB required)
- JWT for auth (optional)
- Multer for image uploads (optional)
- Deployment-ready (Heroku / Vercel / Render)

---

## 📁 Suggested Project Structure
```

online-fashion-store/
├── README.md
├── package.json
├── frontend/
│   ├── src/
│   │   ├── components/
│   │   ├── pages/
│   │   ├── assets/
│   │   └── App.jsx
│   ├── public/
│   └── vite.config.js
├── backend/
│   ├── src/
│   │   ├── controllers/
│   │   ├── routes/
│   │   ├── models/         # JSON models or lowdb helpers
│   │   └── server.js
│   ├── data/
│   │   └── products.json   # seed data
│   └── package.json
└── docs/

````

---

## 💻 Installation & Run (local dev)
### Prerequisites
- Node.js (v16+)
- npm or yarn

### Steps
1. Clone the repo
   ```bash
   git clone https://github.com/<your-username>/online-fashion-store.git
   cd online-fashion-store
````

2. Start backend

   ```bash
   cd backend
   npm install
   npm run dev      # starts Express server on e.g. http://localhost:5000
   ```
3. Start frontend

   ```bash
   cd ../frontend
   npm install
   npm run dev      # starts dev server on e.g. http://localhost:3000
   ```
4. Open `http://localhost:3000` and browse the store.

---

## 🧪 Tests

* Add Jest for backend unit tests
* Add React Testing Library for frontend components
* Example script:

  ```json
  "scripts": {
    "test": "jest"
  }
  ```

---

## ♻️ Deploy

* Frontend: Vercel / Netlify (link to frontend build)
* Backend: Render / Heroku (deploy Node/Express)
* Set environment variables for production (API_URL, JWT_SECRET, etc.)

---

## ✨ Extending the Project

Ideas to extend:

* Real database (Postgres / MongoDB)
* Payment integration (Stripe sandbox)
* Order history and user profiles
* Product recommendations & related products
* Image CDN integration and cloud storage
* Admin auth & role-based access control

---

## 📝 License

MIT License — feel free to reuse and adapt for learning and demo projects.

---

## 🧑‍💻 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feat/awesome-feature`)
3. Commit changes (`git commit -m "feat: add awesome feature"`)
4. Push and open a PR

---

## 🙋 Contact

Created by Nadula hatharasinghe — for questions, open an issue or contact me at `nadulahatharasnghe@gmail.com`.

