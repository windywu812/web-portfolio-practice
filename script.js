const portfolios = [
  (portfolio = {
    title: "Batikin",
    desc:
      "This app will help you create your own unique Batik specially for Batam’s Motif. Picker your shape, modify it and create your own Batik. Don’t forget to share with your friends.",
    img: "asset/img-app-2.svg",
    techUsed: ["UIKit", "Core Graphics", "Macaw"],
  }),
  (portfolio = {
    title: "Fleet",
    desc:
      "This app will motivate you to do good daily walking habit by companion of our cute mascot. This app also tracks your daily steps to finish achievements and track your progress.",
    img: "asset/img-app-1.svg",
    techUsed: ["UIKit", "HealthKit", "Charts"],
  }),
  (portfolio = {
    title: "Indo News",
    desc:
      "This is app news with complex UI layout with MVVM Archicture. With this app you can the latest dan suitable news for you.",
    img: "asset/img-app-3.svg",
    techUsed: ["UIKit", "Networking", "Combine"],
  }),
];

for (i in portfolios) {
  const project = document.createElement("project");
  project.setAttribute("class", "project");

  const img = document.createElement("img");
  img.setAttribute("src", portfolios[i].img);
  const imgContainer = document.createElement("div");
  imgContainer.setAttribute("class", "img-project");
  imgContainer.appendChild(img);

  const projectTitle = document.createElement("h2");
  projectTitle.textContent = portfolios[i].title;
  const projectDesc = document.createElement("p");
  projectDesc.textContent = portfolios[i].desc;
  const introductionInfo = document.createElement("div");
  introductionInfo.setAttribute("class", "introduction-info");
  introductionInfo.appendChild(projectTitle);
  introductionInfo.appendChild(projectDesc);

  const techTitle = document.createElement("p");
  techTitle.textContent = "Technology Used";
  const techList = document.createElement("ul");
  console.log(portfolios[i].techUsed);

  for (j in portfolios[i].techUsed) {
    const tech = document.createElement("li");
    tech.textContent = portfolios[i].techUsed[j];
    techList.appendChild(tech);
  }

  const techInfo = document.createElement("div");
  techInfo.setAttribute("class", "tech-info");
  techInfo.appendChild(techTitle);
  techInfo.appendChild(techList);

  const buttonMore = document.createElement("button");
  buttonMore.textContent = "More";
  buttonMore.setAttribute("class", "btn");

  const info = document.createElement("div");
  info.setAttribute("class", "info");
  info.appendChild(introductionInfo);
  info.appendChild(techInfo);
  info.appendChild(buttonMore);

  project.appendChild(imgContainer);
  project.appendChild(info);

  const root = document.getElementById("project");
  root.appendChild(project);
}
