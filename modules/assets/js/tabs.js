// handle current tablink style
const handleCurrentTabLinkStyle = (tabLinks, currentIndex) => {
  tabLinks.forEach((tabLink, idx) => {
    const currentTabLink = tabLinks[currentIndex];
    const tabLinkClasses = tabLink.classList;
    const currentTabLinkClasses = currentTabLink.classList;
    const spanClasses = tabLink.querySelector("span")?.classList;

    const currentSpanClasses = currentTabLink.querySelector("span")?.classList;

    if (spanClasses) {
      // button default style
      tabLinkClasses.remove("bg-white", "shadow-bottom");
      tabLinkClasses.add(
        "bg-lightGrey7",
        "dark:bg-lightGrey7-dark",
        "inActive"
      );
      spanClasses.replace("w-full", "w-0");
      tabLink.disabled = false;
      // current button style
      if (currentIndex === idx) {
        currentTabLink.disabled = true;
        currentTabLinkClasses.remove(
          "bg-lightGrey7",
          "dark:bg-lightGrey7-dark",
          "inActive"
        );
        currentTabLinkClasses.add(
          "bg-white",
          "dark:bg-whiteColor-dark",
          "shadow-bottom"
        );
        currentSpanClasses.replace("w-0", "w-full");
      }
    } else {
      tabLinkClasses.remove("before:w-full", "active");
      if (currentIndex === idx) {
        tabLinkClasses.add("before:w-full", "active");
      }
    }
  });
};

// handle tab content
const handleTabContents = (tab, currentIndex) => {
  const nodeListOftabContents = tab.querySelector(".tab-contents").children;
  const tabContents = [...nodeListOftabContents];
  const currentTabContentClasses = tabContents[currentIndex].classList;
  tabContents.forEach((tabContent, idx) => {
    const tabContentClasses = tabContent.classList;

    // tab contents default style
    tabContentClasses.remove("block");
    tabContentClasses.add("hidden");

    if (currentIndex === idx) {
      currentTabContentClasses.add("block", "opacity-0");
      currentTabContentClasses.remove("hidden", "opacity-100");

      // add accordion style
      const accordion = tab.querySelector(".accordion.active");
      if (accordion) {
        const contents = accordion.querySelector(".accordion-content");
        const contentHeight = contents.children[idx]?.offsetHeight;
        if (contentHeight) {
          contents.style.height = `${contentHeight}px`;
        }
      }
      setTimeout(() => {
        currentTabContentClasses.remove("opacity-0");
        currentTabContentClasses.add("opacity-100");
      }, 150);
    }
  });
};

// get tab links and listen link events
const handleTabLinks = (tab) => {
  const nodeListOfTabLinks = tab.querySelector(".tab-links").children;
  const tabLinks = [...nodeListOfTabLinks];

  tabLinks.forEach((tabLink, idx) => {
    tabLink.addEventListener("click", () => {
      handleCurrentTabLinkStyle(tabLinks, idx);
      handleTabContents(tab, idx);
    });
  });
};

// main tab controller
const tabsController = () => {
  const nodeListOfTabs = document.querySelectorAll(".tab");
  const tabs = [...nodeListOfTabs];
  tabs.forEach((tab) => handleTabLinks(tab));
};


