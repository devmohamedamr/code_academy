import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import Home from './pages/Home'
import About from './pages/About'
import Contact from './pages/Contact'

import {createBrowserRouter,RouterProvider} from 'react-router-dom'
const map = createBrowserRouter([
  {
    path:"",
    element:<Home />
  },
  {
    path:"/about",
    element:<About />
  },
  {
    path:"/contact",
    element:<Contact />
  }
])
const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <RouterProvider router={map} />
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
