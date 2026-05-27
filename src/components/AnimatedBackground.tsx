import { motion, useReducedMotion } from "motion/react";

export default function AnimatedBackground() {
  const reduceMotion = useReducedMotion();

  return (
    <div className="animated-background" aria-hidden="true">
      <div className="background-grid" />
      <motion.div
        className="ambient-plane ambient-plane-a"
        animate={reduceMotion ? undefined : { x: ["-8%", "6%", "-8%"], opacity: [0.32, 0.54, 0.32] }}
        transition={{ duration: 18, repeat: Infinity, ease: "easeInOut" }}
      />
      <motion.div
        className="ambient-plane ambient-plane-b"
        animate={reduceMotion ? undefined : { x: ["7%", "-5%", "7%"], opacity: [0.18, 0.34, 0.18] }}
        transition={{ duration: 24, repeat: Infinity, ease: "easeInOut" }}
      />
      <motion.div
        className="scan-band"
        animate={reduceMotion ? undefined : { y: ["-20%", "120%"] }}
        transition={{ duration: 16, repeat: Infinity, ease: "linear" }}
      />
      <div className="background-vignette" />
    </div>
  );
}
