var lidi = {
  // (A) CREATE NEW LIKE/DISLIKE BUTTON
  //  target : container to generate button
  //  status : -1 dislike, 0 neutral, 1 like (default 0)
  //  count : [likes, dislikes] (optional)
  create : (opt) => {
    // (A1) NEW INSTANCE & DEFAULT SETTING
    let inst = opt;
    if (!inst.status) { inst.status = 0; }

    // (A2) GENERATE HTML
    // WRAPPER
    inst.hWrap.classList.add("lidiWrap");
    if (inst.count) { inst.hWrap.classList.add("count"); }

    // LIKE BUTTON
    inst.hUp = document.createElement("div");
    inst.hUp.className = "lidiUp";
    if (inst.status==1) { inst.hUp.classList.add("set"); }
    inst.hWrap.appendChild(inst.hUp);

    // LIKES COUNT
    if (inst.count) {
      inst.hUpCount = document.createElement("div");
      inst.hUpCount.className = "lidiUpCount";
      inst.hUpCount.innerHTML = inst.count[0];
      inst.hWrap.appendChild(inst.hUpCount);
    }

    // DISLIKE BUTTON
    inst.hDown = document.createElement("div");
    inst.hDown.className = "lidiDown";
    if (inst.status==-1) { inst.hDown.classList.add("set"); }
    inst.hWrap.appendChild(inst.hDown);

    // DISLIKES COUNT
    if (inst.count) {
      inst.hDownCount = document.createElement("div");
      inst.hDownCount.className = "lidiDownCount";
      inst.hDownCount.innerHTML = inst.count[1];
      inst.hWrap.appendChild(inst.hDownCount);
    }

    // (A3) TOGGLE LIKE/DISLIKE
    inst.hUp.addEventListener("click", () => { lidi.updown(inst, true); });
    inst.hDown.addEventListener("click", () => { lidi.updown(inst, false); });

    // (A4) HANDLE LIKE/DISLIKE CHANGE
    if (inst.count) {
      inst.hUp.addEventListener("click", () => {
        inst.onChange(inst.status, (count) => { lidi.recount(count, inst); });
      });
      inst.hDown.addEventListener("click", () => {
        inst.onChange(inst.status, (count) => { lidi.recount(count, inst); });
      });
      inst.recount = (count) => { lidi.recount(count, inst); };
    } else {
      inst.hUp.addEventListener("click", () => { inst.onChange(inst.status); });
      inst.hDown.addEventListener("click", () => { inst.onChange(inst.status); });
    }

    // (A5) DONE!
    return inst;
  },

  // (B) UPDATE LIKE/DISLIKE STATUS
  updown : (inst, up) => {
    // (B1) SET STATUS FLAG
    if (up) { inst.status = inst.status == 1 ? 0 : 1; }
    else { inst.status = inst.status == -1 ? 0 : -1; }

    // (B2) SET CSS
    if (inst.status==1) {
      inst.hUp.classList.add("set");
      inst.hDown.classList.remove("set");
    } else if (inst.status==-1) {
      inst.hUp.classList.remove("set");
      inst.hDown.classList.add("set");
    } else {
      inst.hUp.classList.remove("set");
      inst.hDown.classList.remove("set");
    }
  },

  // (C) UPDATE LIKE/DISLIKES COUNT
  recount : (count, inst) => {
    inst.hUpCount.innerHTML = count[0];
    inst.hDownCount.innerHTML = count[1];
  }
};
