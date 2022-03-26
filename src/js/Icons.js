let getIcons = function() {
  const feather = require("feather-icons");
  feather.replace({
    "stroke-width": 1.5,
    width: 18,
    height: 18
  });
};
exports.getIcons = getIcons;
