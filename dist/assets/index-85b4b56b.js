(function(){const s=document.createElement("link").relList;if(s&&s.supports&&s.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))c(e);new MutationObserver(e=>{for(const t of e)if(t.type==="childList")for(const l of t.addedNodes)l.tagName==="LINK"&&l.rel==="modulepreload"&&c(l)}).observe(document,{childList:!0,subtree:!0});function i(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerPolicy&&(t.referrerPolicy=e.referrerPolicy),e.crossOrigin==="use-credentials"?t.credentials="include":e.crossOrigin==="anonymous"?t.credentials="omit":t.credentials="same-origin",t}function c(e){if(e.ep)return;e.ep=!0;const t=i(e);fetch(e.href,t)}})();var o=document.getElementById("button-light"),r=document.getElementById("button-dark");localStorage.getItem("color-mode")==="dark"||!("color-mode"in localStorage)&&window.matchMedia("(prefers-color-scheme: dark)").matches?(o.classList.remove("toogle-theme"),r.classList.add("toogle-theme")):(o.classList.add("toogle-theme"),r.classList.remove("toogle-theme"));o.addEventListener("click",function(){"color-mode"in localStorage||(document.documentElement.classList.remove("dark"),r.classList.remove("toogle-theme"),this.classList.add("toogle-theme"),localStorage.setItem("color-mode","light")),localStorage.getItem("color-mode")==="dark"&&(document.documentElement.classList.remove("dark"),r.classList.remove("toogle-theme"),this.classList.add("toogle-theme"),localStorage.setItem("color-mode","light"))});r.addEventListener("click",function(){"color-mode"in localStorage||(document.documentElement.classList.add("dark"),o.classList.remove("toogle-theme"),this.classList.add("toogle-theme"),localStorage.setItem("color-mode","dark")),localStorage.getItem("color-mode")==="light"&&(document.documentElement.classList.add("dark"),o.classList.remove("toogle-theme"),this.classList.add("toogle-theme"),localStorage.setItem("color-mode","dark"))});
