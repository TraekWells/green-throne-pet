const app = new Vue({
  el: "#form",
  data: {
    howManyDogs: "one",
    howOften: "oneTime",
    cleanedLast: "oneToTwoWeeks",
    oneTime: 25,
    oncePerWeek: 12,
    twicePerWeek: 9,
    everyOtherWeek: 25,
    prices: {
      initialFees: {
        oneToTwoWeeks: 25,
        threeToFourWeeks: 35,
        oneToTwoMonths: 40,
        threeToFourMonths: 45,
        fiveOrMoreMonths: 50,
      },
      numberOfDogs: {
        one: {
          oneTime: 25,
          oncePerWeek: 12,
          twicePerWeek: 9,
          everyOtherWeek: 25,
        },
        twoToThree: {
          oneTime: 40,
          oncePerWeek: 14,
          twicePerWeek: 11,
          everyOtherWeek: 30,
        },
        fourToFive: {
          oneTime: 75,
          oncePerWeek: 16,
          twicePerWeek: 13,
          everyOtherWeek: 35,
        },
      },
    },
  },
  methods: {
    updatePricing() {
      let initialFees;

      if (this.cleanedLast === "oneToTwoWeeks") {
        initialFees = this.prices.initialFees.oneToTwoWeeks;
      }

      if (this.cleanedLast === "threeToFourWeeks") {
        initialFees = this.prices.initialFees.threeToFourWeeks;
      }

      if (this.cleanedLast === "oneToTwoMonths") {
        initialFees = this.prices.initialFees.oneToTwoMonths;
      }

      if (this.cleanedLast === "threeToFourMonths") {
        initialFees = this.prices.initialFees.threeToFourWeeks;
      }

      if (this.cleanedLast === "fiveOrMoreMonths") {
        initialFees = this.prices.initialFees.fiveOrMoreMonths;
      }

      if (this.howManyDogs === "one") {
        this.oneTime = this.prices.numberOfDogs.one.oneTime + initialFees;
        this.oncePerWeek =
          this.prices.numberOfDogs.one.oncePerWeek + initialFees;
        this.twicePerWeek =
          this.prices.numberOfDogs.one.twicePerWeek + initialFees;
        this.everyOtherWeek =
          this.prices.numberOfDogs.one.everyOtherWeek + initialFees;
      }

      if (this.howManyDogs === "twoToThree") {
        this.oneTime =
          this.prices.numberOfDogs.twoToThree.oneTime + initialFees;
        this.oncePerWeek =
          this.prices.numberOfDogs.twoToThree.oncePerWeek + initialFees;
        this.twicePerWeek =
          this.prices.numberOfDogs.twoToThree.twicePerWeek + initialFees;
        this.everyOtherWeek =
          this.prices.numberOfDogs.twoToThree.everyOtherWeek + initialFees;
      }

      if (this.howManyDogs === "fourToFive") {
        this.oneTime =
          this.prices.numberOfDogs.fourToFive.oneTime + initialFees;
        this.oncePerWeek =
          this.prices.numberOfDogs.fourToFive.oncePerWeek + initialFees;
        this.twicePerWeek =
          this.prices.numberOfDogs.fourToFive.twicePerWeek + initialFees;
        this.everyOtherWeek =
          this.prices.numberOfDogs.fourToFive.everyOtherWeek + initialFees;
      }
    },
  },
});
