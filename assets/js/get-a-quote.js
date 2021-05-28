const app = new Vue({
  el: "#form",
  data: {
    howManyDogs: "one",
    howOften: "oneTime",
    cleanedLast: "oneToTwoWeeks",
    oneTime: "75",
    oncePerWeek: "12",
    twicePerWeek: "9",
    everyOtherWeek: "25",
    initialCleanupFee: "25",
    prices: {
      initialFees: {
        oneToTwoWeeks: "25",
        threeToFourWeeks: "35",
        oneToTwoMonths: "40",
        threeToFourMonths: "45",
        fiveOrMoreMonths:
          "50 - 75 (will give exact amount when we see the yard)",
      },
      numberOfDogs: {
        one: {
          oncePerWeek: "12",
          twicePerWeek: "9",
          everyOtherWeek: "25",
        },
        twoToThree: {
          oncePerWeek: "14",
          twicePerWeek: "11",
          everyOtherWeek: "30",
        },
        fourToFive: {
          oncePerWeek: "16",
          twicePerWeek: "13",
          everyOtherWeek: "35",
        },
      },
    },
  },
  methods: {
    updatePricing() {
      if (this.cleanedLast === "oneToTwoWeeks") {
        this.initialCleanupFee = this.prices.initialFees.oneToTwoWeeks;
      }

      if (this.cleanedLast === "threeToFourWeeks") {
        this.initialCleanupFee = this.prices.initialFees.threeToFourWeeks;
      }

      if (this.cleanedLast === "oneToTwoMonths") {
        this.initialCleanupFee = this.prices.initialFees.oneToTwoMonths;
      }

      if (this.cleanedLast === "threeToFourMonths") {
        this.initialCleanupFee = this.prices.initialFees.threeToFourMonths;
      }

      if (this.cleanedLast === "fiveOrMoreMonths") {
        this.initialCleanupFee = this.prices.initialFees.fiveOrMoreMonths;
      }

      if (this.howManyDogs === "one") {
        this.oncePerWeek = this.prices.numberOfDogs.one.oncePerWeek;
        this.twicePerWeek = this.prices.numberOfDogs.one.twicePerWeek;
        this.everyOtherWeek = this.prices.numberOfDogs.one.everyOtherWeek;
      }

      if (this.howManyDogs === "twoToThree") {
        this.oncePerWeek = this.prices.numberOfDogs.twoToThree.oncePerWeek;
        this.twicePerWeek = this.prices.numberOfDogs.twoToThree.twicePerWeek;
        this.everyOtherWeek =
          this.prices.numberOfDogs.twoToThree.everyOtherWeek;
      }

      if (this.howManyDogs === "fourToFive") {
        this.oncePerWeek = this.prices.numberOfDogs.fourToFive.oncePerWeek;
        this.twicePerWeek = this.prices.numberOfDogs.fourToFive.twicePerWeek;
        this.everyOtherWeek =
          this.prices.numberOfDogs.fourToFive.everyOtherWeek;
      }
    },
  },
});
