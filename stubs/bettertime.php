<?php

/**
 * System-wide clock that measures real (i.e., wall-clock) time. This clock
 * is affected by discontinuous jumps in the system time (e.g., manual clock
 * updates, NTP clock updates, etc).
 */
define('CLOCK_REALTIME', 0);

/**
 * Clock that cannot be set and represents monotonic time since some
 * unspecified starting point. This clock is not affected by discontinuous
 * jumps in the system time.
 */
define('CLOCK_MONOTONIC', 1);

/**
 * Per-process CPU-time clock (measures CPU time consumed by all threads in
 * the process).
 */
define('CLOCK_PROCESS_CPUTIME_ID', 2);


/**
 * Thread-specific CPU-time clock.
 */
define('CLOCK_THREAD_CPUTIME_ID', 3);

/**
 * (Linux >= 2.6.28) Similar to CLOCK_MONOTONIC, but provides access to a raw
 * hardware-based time that is not subject to NTP adjustments or the
 * incremental adjustments performed by adjtime.
 */
define('CLOCK_MONOTONIC_RAW', 4);

/**
 * (Linux >= 2.6.32) A faster but less precise version of CLOCK_REALTIME.
 * Use when you need very fast, but not fine-grained timestamps.
 */
define('CLOCK_REALTIME_COARSE', 5);

/**
 * (Linux >= 2.6.32) A faster but less precise version of CLOCK_MONOTONIC.
 * Use when you need very fast, but not fine-grained timestamps.
 */
define('CLOCK_MONOTONIC_COARSE', 6);

/**
 * (Linux >= 2.6.39) Identical to CLOCK_MONOTONIC, except it also includes
 * any time that the system is suspended. This allows applications to get
 * a suspend-aware monotonic clock.
 */
define ('CLOCK_BOOTTIME', 7);

/**
 * Retrieves the value (time) of the specified clock.
 * @param int $clock_id
 * @return false|float
 */
function posix_clock_gettime($clock_id = CLOCK_REALTIME) {}

/**
 * Retrieves the resolution (precision) of the specified clock.
 * @param int $clock_id
 * @return false|float
 */
function posix_clock_getres($clock_id = CLOCK_REALTIME) {}
