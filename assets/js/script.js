"use strict";

const contentsEl = document.getElementById("js-contents");
const navLinks = document.querySelectorAll(".nav__link[data-category]");
const filterRoleEl = document.getElementById("js-filter-role");
const filterYearEl = document.getElementById("js-filter-year");
const filterAiEl = document.getElementById("js-filter-ai");
const workDialog = document.getElementById("js-work-dialog");
const workDialogClose = document.getElementById("js-work-dialog-close");
const workDialogImage = document.getElementById("js-work-dialog-image");
const workDialogTitle = document.getElementById("js-work-dialog-title");
const workDialogDescription = document.getElementById(
  "js-work-dialog-description"
);
const workDialogRole = document.getElementById("js-work-dialog-role");
const workDialogAiWrap = document.getElementById("js-work-dialog-ai-wrap");
const workDialogAi = document.getElementById("js-work-dialog-ai");
const workDialogLink = document.getElementById("js-work-dialog-link");

let allWorks = [];
const worksById = new Map();

const filters = {
  category: "all",
  role: "all",
  year: "all",
  ai: "all",
};

const escapeHtml = (value) => {
  return String(value)
    .replaceAll("&", "&amp;")
    .replaceAll("<", "&lt;")
    .replaceAll(">", "&gt;")
    .replaceAll('"', "&quot;")
    .replaceAll("'", "&#39;");
};

const formatUsedAi = (usedAi) => {
  if (Array.isArray(usedAi)) {
    return usedAi.join("・");
  }

  return String(usedAi ?? "").trim();
};

const hasUsedAi = (work) => Boolean(formatUsedAi(work.usedAi));

const getTagList = (tags) => {
  if (Array.isArray(tags)) {
    return tags.map((tag) => String(tag).trim()).filter(Boolean);
  }

  return String(tags ?? "")
    .split(/[、・,]/)
    .map((tag) => tag.trim())
    .filter(Boolean);
};

const formatTagsText = (tags) => getTagList(tags).join("・");

const formatTags = (tags) => getTagList(tags).map(escapeHtml).join("、");

const normalizeCategory = (category) => {
  if (Array.isArray(category)) {
    return String(category[0] ?? "").trim().toLowerCase();
  }

  return String(category ?? "").trim().toLowerCase();
};

const normalizeFilterValue = (value) => {
  const normalized = String(value ?? "").trim();
  return normalized || "all";
};

const getYearValue = (year) => String(year ?? "").trim();

const getInitialFilters = () => {
  const params = new URLSearchParams(window.location.search);

  return {
    category: normalizeCategory(params.get("category") || "all"),
    role: normalizeFilterValue(params.get("role") || "all"),
    year: normalizeFilterValue(params.get("year") || "all"),
    ai: normalizeFilterValue(params.get("ai") || "all"),
  };
};

const filterWorks = () => {
  return allWorks.filter((work) => {
    if (
      filters.category !== "all" &&
      normalizeCategory(work.category) !== filters.category
    ) {
      return false;
    }

    if (
      filters.role !== "all" &&
      !getTagList(work.tags).includes(filters.role)
    ) {
      return false;
    }

    if (filters.year !== "all" && getYearValue(work.year) !== filters.year) {
      return false;
    }

    if (filters.ai === "with" && !hasUsedAi(work)) {
      return false;
    }

    if (filters.ai === "without" && hasUsedAi(work)) {
      return false;
    }

    return true;
  });
};

const updateNavState = () => {
  navLinks.forEach((link) => {
    const linkCategory = normalizeCategory(link.dataset.category ?? "all");
    const isCurrent = linkCategory === filters.category;

    link.classList.toggle("is-current", isCurrent);
    link.setAttribute("aria-current", isCurrent ? "page" : "false");
  });
};

const updateFilterControls = () => {
  if (filterRoleEl) {
    filterRoleEl.value = filters.role;
  }

  if (filterYearEl) {
    filterYearEl.value = filters.year;
  }

  if (filterAiEl) {
    filterAiEl.value = filters.ai;
  }
};

const updateUrl = () => {
  const url = new URL(window.location.href);
  const params = url.searchParams;

  if (filters.category === "all") {
    params.delete("category");
  } else {
    params.set("category", filters.category);
  }

  if (filters.role === "all") {
    params.delete("role");
  } else {
    params.set("role", filters.role);
  }

  if (filters.year === "all") {
    params.delete("year");
  } else {
    params.set("year", filters.year);
  }

  if (filters.ai === "all") {
    params.delete("ai");
  } else {
    params.set("ai", filters.ai);
  }

  window.history.replaceState(null, "", url);
};

const renderSelectOptions = (selectEl, values, selectedValue) => {
  if (!selectEl) {
    return;
  }

  const options = [
    `<option value="all">All</option>`,
    ...values.map(
      (value) =>
        `<option value="${escapeHtml(value)}">${escapeHtml(value)}</option>`
    ),
  ];

  selectEl.innerHTML = options.join("");

  const hasSelected = values.includes(selectedValue) || selectedValue === "all";
  selectEl.value = hasSelected ? selectedValue : "all";

  if (!hasSelected) {
    filters[selectEl.name] = "all";
  }
};

const populateFilterOptions = () => {
  const roles = [
    ...new Set(allWorks.flatMap((work) => getTagList(work.tags))),
  ].sort((a, b) => a.localeCompare(b, "ja"));

  const years = [
    ...new Set(
      allWorks.map((work) => getYearValue(work.year)).filter(Boolean)
    ),
  ].sort((a, b) => Number(b) - Number(a) || b.localeCompare(a, "ja"));

  renderSelectOptions(filterRoleEl, roles, filters.role);
  renderSelectOptions(filterYearEl, years, filters.year);
};

const renderArticle = (work) => {
  const title = escapeHtml(work.title);
  const tags = formatTags(work.tags);
  const year = escapeHtml(work.year);
  const imageUrl = escapeHtml(work.thumbnail?.url ?? "");
  const imageWidth = work.thumbnail?.width ?? 370;
  const imageHeight = work.thumbnail?.height ?? 250;

  return `
    <article class="article" data-work-id="${escapeHtml(work.id)}">
      <div class="article__media">
        <img
          src="${imageUrl}"
          alt=""
          class="article__image"
          width="${imageWidth}"
          height="${imageHeight}"
        />
      </div>
      <h2 class="article__title">${title}</h2>
      <p class="article__tags">${tags}</p>
      <p class="article__year">${year}</p>
    </article>
  `;
};

const bindArticleTriggers = () => {
  contentsEl?.querySelectorAll(".article[data-work-id]").forEach((article) => {
    article.addEventListener("click", () => {
      const work = worksById.get(article.dataset.workId);

      if (work) {
        openWorkDialog(work);
      }
    });
  });
};

const openWorkDialog = (work) => {
  if (!workDialog) {
    return;
  }

  const category = normalizeCategory(work.category);
  const isBanner = category === "banner";
  const isWebsite = category === "website";

  workDialog.classList.toggle("work-dialog--banner", isBanner);

  workDialogTitle.textContent = work.title ?? "";
  workDialogDescription.textContent = work.description ?? "";
  workDialogRole.textContent = formatTagsText(work.tags);

  const usedAi = formatUsedAi(work.usedAi);

  if (usedAi) {
    workDialogAi.textContent = usedAi;
    workDialogAiWrap.hidden = false;
  } else {
    workDialogAi.textContent = "";
    workDialogAiWrap.hidden = true;
  }

  if (work.thumbnail?.url) {
    workDialogImage.src = work.thumbnail.url;
    workDialogImage.hidden = false;

    if (work.thumbnail.width) {
      workDialogImage.width = work.thumbnail.width;
    } else {
      workDialogImage.removeAttribute("width");
    }

    if (work.thumbnail.height) {
      workDialogImage.height = work.thumbnail.height;
    } else {
      workDialogImage.removeAttribute("height");
    }
  } else {
    workDialogImage.removeAttribute("src");
    workDialogImage.removeAttribute("width");
    workDialogImage.removeAttribute("height");
    workDialogImage.hidden = true;
  }

  if (isWebsite && work.url) {
    workDialogLink.href = work.url;
    workDialogLink.hidden = false;
  } else {
    workDialogLink.removeAttribute("href");
    workDialogLink.hidden = true;
  }

  workDialog.showModal();
};

const closeWorkDialog = () => {
  workDialog?.close();
};

const fetchAllWorks = async () => {
  const config = window.MICROCMS_CONFIG;

  if (!config?.serviceDomain || !config?.apiKey) {
    throw new Error("config.js に serviceDomain と apiKey を設定してください。");
  }

  const endpoint = new URL(
    `https://${config.serviceDomain}.microcms.io/api/v1/works`
  );
  endpoint.searchParams.set("limit", "100");
  endpoint.searchParams.set("orders", "-publishedAt");

  const response = await fetch(endpoint, {
    headers: {
      "X-MICROCMS-API-KEY": config.apiKey,
    },
  });

  if (!response.ok) {
    throw new Error(`記事の取得に失敗しました (${response.status})`);
  }

  const data = await response.json();
  return data.contents ?? [];
};

const renderWorks = () => {
  if (!contentsEl) {
    return;
  }

  const works = filterWorks();

  if (works.length === 0) {
    contentsEl.innerHTML = "<p>該当する記事がありません。</p>";
    return;
  }

  contentsEl.innerHTML = works.map(renderArticle).join("");
  bindArticleTriggers();
};

const applyFilters = () => {
  updateNavState();
  updateFilterControls();
  updateUrl();
  renderWorks();
};

const setCategory = (category) => {
  filters.category = normalizeCategory(category);
  applyFilters();
};

const setFilter = (key, value) => {
  filters[key] = normalizeFilterValue(value);
  applyFilters();
};

const init = async () => {
  if (!contentsEl) {
    return;
  }

  Object.assign(filters, getInitialFilters());
  contentsEl.innerHTML = "<p>読み込み中...</p>";

  try {
    allWorks = await fetchAllWorks();
    worksById.clear();
    allWorks.forEach((work) => {
      worksById.set(work.id, work);
    });
    populateFilterOptions();
    applyFilters();
  } catch (error) {
    contentsEl.innerHTML = `<p>${escapeHtml(error.message)}</p>`;
  }
};

navLinks.forEach((link) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();
    setCategory(link.dataset.category ?? "all");
  });
});

filterRoleEl?.addEventListener("change", () => {
  setFilter("role", filterRoleEl.value);
});

filterYearEl?.addEventListener("change", () => {
  setFilter("year", filterYearEl.value);
});

filterAiEl?.addEventListener("change", () => {
  setFilter("ai", filterAiEl.value);
});

workDialogClose?.addEventListener("click", closeWorkDialog);

workDialog?.addEventListener("click", (event) => {
  const panel = workDialog.querySelector(".work-dialog__panel");
  const target = panel ?? workDialog;
  const rect = target.getBoundingClientRect();
  const isInDialog =
    event.clientX >= rect.left &&
    event.clientX <= rect.right &&
    event.clientY >= rect.top &&
    event.clientY <= rect.bottom;

  if (!isInDialog) {
    closeWorkDialog();
  }
});

workDialog?.addEventListener("cancel", (event) => {
  event.preventDefault();
  closeWorkDialog();
});

init();
