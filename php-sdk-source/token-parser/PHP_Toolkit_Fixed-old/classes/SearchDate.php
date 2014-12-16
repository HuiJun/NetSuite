<?php

class SearchDate {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const fiscalHalfBeforeLast = "fiscalHalfBeforeLast";
	/**
	 * @var string
	 */
	const fiscalHalfBeforeLastToDate = "fiscalHalfBeforeLastToDate";
	/**
	 * @var string
	 */
	const fiscalQuarterBeforeLast = "fiscalQuarterBeforeLast";
	/**
	 * @var string
	 */
	const fiscalQuarterBeforeLastToDate = "fiscalQuarterBeforeLastToDate";
	/**
	 * @var string
	 */
	const fiscalYearBeforeLast = "fiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const fiscalYearBeforeLastToDate = "fiscalYearBeforeLastToDate";
	/**
	 * @var string
	 */
	const lastBusinessWeek = "lastBusinessWeek";
	/**
	 * @var string
	 */
	const lastFiscalHalf = "lastFiscalHalf";
	/**
	 * @var string
	 */
	const lastFiscalHalfOneYearAgo = "lastFiscalHalfOneYearAgo";
	/**
	 * @var string
	 */
	const lastFiscalHalfToDate = "lastFiscalHalfToDate";
	/**
	 * @var string
	 */
	const lastFiscalQuarter = "lastFiscalQuarter";
	/**
	 * @var string
	 */
	const lastFiscalQuarterOneYearAgo = "lastFiscalQuarterOneYearAgo";
	/**
	 * @var string
	 */
	const lastFiscalQuarterToDate = "lastFiscalQuarterToDate";
	/**
	 * @var string
	 */
	const lastFiscalYear = "lastFiscalYear";
	/**
	 * @var string
	 */
	const lastFiscalYearToDate = "lastFiscalYearToDate";
	/**
	 * @var string
	 */
	const lastMonth = "lastMonth";
	/**
	 * @var string
	 */
	const lastMonthOneQuarterAgo = "lastMonthOneQuarterAgo";
	/**
	 * @var string
	 */
	const lastMonthOneYearAgo = "lastMonthOneYearAgo";
	/**
	 * @var string
	 */
	const lastMonthToDate = "lastMonthToDate";
	/**
	 * @var string
	 */
	const lastMonthTwoQuartersAgo = "lastMonthTwoQuartersAgo";
	/**
	 * @var string
	 */
	const lastMonthTwoYearsAgo = "lastMonthTwoYearsAgo";
	/**
	 * @var string
	 */
	const lastQuarterTwoYearsAgo = "lastQuarterTwoYearsAgo";
	/**
	 * @var string
	 */
	const lastRollingHalf = "lastRollingHalf";
	/**
	 * @var string
	 */
	const lastRollingQuarter = "lastRollingQuarter";
	/**
	 * @var string
	 */
	const lastRollingYear = "lastRollingYear";
	/**
	 * @var string
	 */
	const lastWeek = "lastWeek";
	/**
	 * @var string
	 */
	const lastWeekToDate = "lastWeekToDate";
	/**
	 * @var string
	 */
	const monthBeforeLast = "monthBeforeLast";
	/**
	 * @var string
	 */
	const monthBeforeLastToDate = "monthBeforeLastToDate";
	/**
	 * @var string
	 */
	const nextBusinessWeek = "nextBusinessWeek";
	/**
	 * @var string
	 */
	const nextFiscalHalf = "nextFiscalHalf";
	/**
	 * @var string
	 */
	const nextFiscalQuarter = "nextFiscalQuarter";
	/**
	 * @var string
	 */
	const nextFiscalYear = "nextFiscalYear";
	/**
	 * @var string
	 */
	const nextFourWeeks = "nextFourWeeks";
	/**
	 * @var string
	 */
	const nextMonth = "nextMonth";
	/**
	 * @var string
	 */
	const nextOneHalf = "nextOneHalf";
	/**
	 * @var string
	 */
	const nextOneMonth = "nextOneMonth";
	/**
	 * @var string
	 */
	const nextOneQuarter = "nextOneQuarter";
	/**
	 * @var string
	 */
	const nextOneWeek = "nextOneWeek";
	/**
	 * @var string
	 */
	const nextOneYear = "nextOneYear";
	/**
	 * @var string
	 */
	const nextWeek = "nextWeek";
	/**
	 * @var string
	 */
	const oneYearBeforeLast = "oneYearBeforeLast";
	/**
	 * @var string
	 */
	const previousMonthsLastFiscalHalf = "previousMonthsLastFiscalHalf";
	/**
	 * @var string
	 */
	const previousMonthsLastFiscalQuarter = "previousMonthsLastFiscalQuarter";
	/**
	 * @var string
	 */
	const previousMonthsLastFiscalYear = "previousMonthsLastFiscalYear";
	/**
	 * @var string
	 */
	const previousMonthsSameFiscalHalfLastYear = "previousMonthsSameFiscalHalfLastYear";
	/**
	 * @var string
	 */
	const previousMonthsSameFiscalQuartherLastFiscalYear = "previousMonthsSameFiscalQuartherLastFiscalYear";
	/**
	 * @var string
	 */
	const previousMonthsThisFiscalHalf = "previousMonthsThisFiscalHalf";
	/**
	 * @var string
	 */
	const previousMonthsThisFiscalQuarter = "previousMonthsThisFiscalQuarter";
	/**
	 * @var string
	 */
	const previousMonthsThisFiscalYear = "previousMonthsThisFiscalYear";
	/**
	 * @var string
	 */
	const previousOneDay = "previousOneDay";
	/**
	 * @var string
	 */
	const previousOneHalf = "previousOneHalf";
	/**
	 * @var string
	 */
	const previousOneMonth = "previousOneMonth";
	/**
	 * @var string
	 */
	const previousOneQuarter = "previousOneQuarter";
	/**
	 * @var string
	 */
	const previousOneWeek = "previousOneWeek";
	/**
	 * @var string
	 */
	const previousOneYear = "previousOneYear";
	/**
	 * @var string
	 */
	const previousQuartersLastFiscalYear = "previousQuartersLastFiscalYear";
	/**
	 * @var string
	 */
	const previousQuartersThisFiscalYear = "previousQuartersThisFiscalYear";
	/**
	 * @var string
	 */
	const previousRollingHalf = "previousRollingHalf";
	/**
	 * @var string
	 */
	const previousRollingQuarter = "previousRollingQuarter";
	/**
	 * @var string
	 */
	const previousRollingYear = "previousRollingYear";
	/**
	 * @var string
	 */
	const sameDayFiscalQuarterBeforeLast = "sameDayFiscalQuarterBeforeLast";
	/**
	 * @var string
	 */
	const sameDayFiscalYearBeforeLast = "sameDayFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const sameDayLastFiscalQuarter = "sameDayLastFiscalQuarter";
	/**
	 * @var string
	 */
	const sameDayLastFiscalYear = "sameDayLastFiscalYear";
	/**
	 * @var string
	 */
	const sameDayLastMonth = "sameDayLastMonth";
	/**
	 * @var string
	 */
	const sameDayLastWeek = "sameDayLastWeek";
	/**
	 * @var string
	 */
	const sameDayMonthBeforeLast = "sameDayMonthBeforeLast";
	/**
	 * @var string
	 */
	const sameDayWeekBeforeLast = "sameDayWeekBeforeLast";
	/**
	 * @var string
	 */
	const sameFiscalQuarterFiscalYearBeforeLast = "sameFiscalQuarterFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const sameHalfLastFiscalYearToDate = "sameHalfLastFiscalYearToDate";
	/**
	 * @var string
	 */
	const sameMonthFiscalQuarterBeforeLast = "sameMonthFiscalQuarterBeforeLast";
	/**
	 * @var string
	 */
	const sameMonthFiscalYearBeforeLast = "sameMonthFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const sameMonthLastFiscalQuarter = "sameMonthLastFiscalQuarter";
	/**
	 * @var string
	 */
	const sameMonthLastFiscalQuarterToDate = "sameMonthLastFiscalQuarterToDate";
	/**
	 * @var string
	 */
	const sameMonthLastFiscalYear = "sameMonthLastFiscalYear";
	/**
	 * @var string
	 */
	const sameMonthLastFiscalYearToDate = "sameMonthLastFiscalYearToDate";
	/**
	 * @var string
	 */
	const sameQuarterLastFiscalYear = "sameQuarterLastFiscalYear";
	/**
	 * @var string
	 */
	const sameQuarterLastFiscalYearToDate = "sameQuarterLastFiscalYearToDate";
	/**
	 * @var string
	 */
	const sameWeekFiscalYearBeforeLast = "sameWeekFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const sameWeekLastFiscalYear = "sameWeekLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfLastBusinessWeek = "startOfLastBusinessWeek";
	/**
	 * @var string
	 */
	const startOfLastFiscalHalf = "startOfLastFiscalHalf";
	/**
	 * @var string
	 */
	const startOfLastFiscalQuarter = "startOfLastFiscalQuarter";
	/**
	 * @var string
	 */
	const startOfLastFiscalYear = "startOfLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfLastHalfOneYearAgo = "startOfLastHalfOneYearAgo";
	/**
	 * @var string
	 */
	const startOfLastMonth = "startOfLastMonth";
	/**
	 * @var string
	 */
	const startOfLastMonthOneQuarterAgo = "startOfLastMonthOneQuarterAgo";
	/**
	 * @var string
	 */
	const startOfLastMonthOneYearAgo = "startOfLastMonthOneYearAgo";
	/**
	 * @var string
	 */
	const startOfLastQuarterOneYearAgo = "startOfLastQuarterOneYearAgo";
	/**
	 * @var string
	 */
	const startOfLastRollingHalf = "startOfLastRollingHalf";
	/**
	 * @var string
	 */
	const startOfLastRollingQuarter = "startOfLastRollingQuarter";
	/**
	 * @var string
	 */
	const startOfLastRollingYear = "startOfLastRollingYear";
	/**
	 * @var string
	 */
	const startOfLastWeek = "startOfLastWeek";
	/**
	 * @var string
	 */
	const startOfNextBusinessWeek = "startOfNextBusinessWeek";
	/**
	 * @var string
	 */
	const startOfNextFiscalHalf = "startOfNextFiscalHalf";
	/**
	 * @var string
	 */
	const startOfNextFiscalQuarter = "startOfNextFiscalQuarter";
	/**
	 * @var string
	 */
	const startOfNextMonth = "startOfNextMonth";
	/**
	 * @var string
	 */
	const startOfNextWeek = "startOfNextWeek";
	/**
	 * @var string
	 */
	const startOfNextYear = "startOfNextYear";
	/**
	 * @var string
	 */
	const startOfPreviousRollingHalf = "startOfPreviousRollingHalf";
	/**
	 * @var string
	 */
	const startOfPreviousRollingQuarter = "startOfPreviousRollingQuarter";
	/**
	 * @var string
	 */
	const startOfPreviousRollingYear = "startOfPreviousRollingYear";
	/**
	 * @var string
	 */
	const startOfSameHalfLastFiscalYear = "startOfSameHalfLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfSameMonthLastFiscalQuarter = "startOfSameMonthLastFiscalQuarter";
	/**
	 * @var string
	 */
	const startOfSameMonthLastFiscalYear = "startOfSameMonthLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfSameQuarterLastFiscalYear = "startOfSameQuarterLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfTheHalfBeforeLast = "startOfTheHalfBeforeLast";
	/**
	 * @var string
	 */
	const startOfTheMonthBeforeLast = "startOfTheMonthBeforeLast";
	/**
	 * @var string
	 */
	const startOfTheQuarterBeforeLast = "startOfTheQuarterBeforeLast";
	/**
	 * @var string
	 */
	const startOfTheWeekBeforeLast = "startOfTheWeekBeforeLast";
	/**
	 * @var string
	 */
	const startOfTheYearBeforeLast = "startOfTheYearBeforeLast";
	/**
	 * @var string
	 */
	const startOfThisBusinessWeek = "startOfThisBusinessWeek";
	/**
	 * @var string
	 */
	const startOfThisFiscalHalf = "startOfThisFiscalHalf";
	/**
	 * @var string
	 */
	const startOfThisFiscalQuarter = "startOfThisFiscalQuarter";
	/**
	 * @var string
	 */
	const startOfThisFiscalYear = "startOfThisFiscalYear";
	/**
	 * @var string
	 */
	const startOfThisMonth = "startOfThisMonth";
	/**
	 * @var string
	 */
	const startOfThisWeek = "startOfThisWeek";
	/**
	 * @var string
	 */
	const startOfThisYear = "startOfThisYear";
	/**
	 * @var string
	 */
	const thisBusinessWeek = "thisBusinessWeek";
	/**
	 * @var string
	 */
	const thisFiscalHalf = "thisFiscalHalf";
	/**
	 * @var string
	 */
	const thisFiscalHalfToDate = "thisFiscalHalfToDate";
	/**
	 * @var string
	 */
	const thisFiscalQuarter = "thisFiscalQuarter";
	/**
	 * @var string
	 */
	const thisFiscalQuarterToDate = "thisFiscalQuarterToDate";
	/**
	 * @var string
	 */
	const thisFiscalYear = "thisFiscalYear";
	/**
	 * @var string
	 */
	const thisFiscalYearToDate = "thisFiscalYearToDate";
	/**
	 * @var string
	 */
	const thisMonth = "thisMonth";
	/**
	 * @var string
	 */
	const thisMonthToDate = "thisMonthToDate";
	/**
	 * @var string
	 */
	const thisRollingHalf = "thisRollingHalf";
	/**
	 * @var string
	 */
	const thisRollingQuarter = "thisRollingQuarter";
	/**
	 * @var string
	 */
	const thisRollingYear = "thisRollingYear";
	/**
	 * @var string
	 */
	const thisWeek = "thisWeek";
	/**
	 * @var string
	 */
	const thisWeekToDate = "thisWeekToDate";
	/**
	 * @var string
	 */
	const thisYear = "thisYear";
	/**
	 * @var string
	 */
	const threeMonthsAgo = "threeMonthsAgo";
	/**
	 * @var string
	 */
	const threeQuartersAgo = "threeQuartersAgo";
	/**
	 * @var string
	 */
	const threeYearsAgo = "threeYearsAgo";
	/**
	 * @var string
	 */
	const today = "today";
	/**
	 * @var string
	 */
	const tomorrow = "tomorrow";
	/**
	 * @var string
	 */
	const twoDaysAgo = "twoDaysAgo";
	/**
	 * @var string
	 */
	const weekBeforeLast = "weekBeforeLast";
	/**
	 * @var string
	 */
	const weekBeforeLastToDate = "weekBeforeLastToDate";
	/**
	 * @var string
	 */
	const yesterday = "yesterday";
    public static function create()
    {
        return new static();
    }
}
